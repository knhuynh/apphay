<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Modules\Backend\Models\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $apps = App::where('status', '=', App::STATUS_ACTIVE)
        ->paginate();
        return view('welcome', compact('apps'));
    }

    /**
    * show app detail 
    *@param int $id 
    */
    public function detail($slug){
        $app = App::where('slug', '=', $slug)
        ->where('status', '=', App::STATUS_ACTIVE)
        ->first();
        if(!$app){
            return redirect('/')->with('msgError', 'App does not found.');
        }
        $apps = App::where('status', '=', App::STATUS_ACTIVE)
        ->take(4)
        ->get();
        $script = $app->script;
        $description = $app->description;
        $short_description = $app->short_description;
        $slug = $app->slug;
        $total_play = $app->total_play;
        $image = $app->image;
        return view('detail', compact('app', 'description', 'apps', 'script', 'short_description', 'slug', 'total_play', 'image'));
    }
}
