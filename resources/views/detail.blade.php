@extends('app')

@section('content')

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">AppHay</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse ">

          <!-- <form class="navbar-form navbar-right"> -->

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 search-panel pull-right">
                    <div class="ui search">
                        <div class="ui icon input">
                            <input class="prompt" type="text" placeholder="Tìm App...">
                            <i class="search icon doneSearch"></i>
                        </div>
                        <div class="results transition hidden"></div>
                    </div>

                </div>
            <div class="col-md-2 col-sm-1 hidden-xs user-nav-panel pull-right">
                    <img class="ui avatar image userAvtar" src="//www.appnhe.com/css/ver2/themes/square-image.png" style="display: none;">
                    <span class="userName hidden-sm" style="display: none;"></span>
                    <button class="signin-btn big ui facebook button" style="display: block;" onclick="loginWithFb()">
                      <i class="facebook icon"></i>
                      Login
                    </button>
                </div>

            <div class="form-group hidden ">
              <input type="text" placeholder="Tìm ứng dụng ..." class="form-control">
            </div>
            <button type="submit" class="btn btn-success hidden">Search</button>
          <!-- </form> -->
        </div>
      </div>
    </nav>

    <div class="">
      <div class="container wrapper">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8 app-player">
              <div class="player">
              <div class="MarkDoneBt" id="MarkDoneBt">
                        <div class="gameContainer">
                          @if(file_exists(public_path($app->image)))
                          <img src="{{URL($app->image)}}" class="img-responsive">
                          @endif
                            <div class="markInfoApp">
                                <span class="showNameApp question">{{$app->name}}</span>
                                <div class="short-description">{{$app->short_description}}</div>
                                <button ng-if="quiz.sns == info.name" class="facebook" type="button" onclick="startWithLogin()">Continue with Facebook</button>
                            </div>
                            <div class="hidden">
                                <!-- <img class="img-responsive img_mark" src="//www.appnhe.com/css/ver2/themes/mark3.svg"> -->
                                <div class="markPlayApp" style="display: block;z-index: 1;position: relative;">
                                    <div class="massive ui fade animated orange button startGame" tabindex="0">
                                        <div class="hidden content">
                                            <i class="play icon"></i>
                                        </div>
                                        <div class="visible content">
                                            Continue
                                        </div>
                                    </div>
                                    <h4>{{$app->meta_desc}}</h4>
                                </div>
                                <div class="markLogin partScoial" style="z-index: 0; display: none;">
                                    <div class="loginWithFacebook shareSocialBox shareFb" onclick="loginWithFb()">
                                        <i></i>
                                        <span>Đăng Nhập Bằng Facebook!</span>
                                    </div>
                                    <h3 style="text-align: center; color: #444;">Một lần và mãi mãi về sau!</h3>
                                </div>
                            </div>
                        </div>
                    </div>


              {!!$app->code!!}

              <div class="markLoadImg">
                        <h1>Đang xử lý cmn kết quả, chờ xí ^^!</h1>
                        <img src="//www.appnhe.com/images/icon/app_load.gif">
                    </div>
                    <div class="ui dimmer rcmPlayArea">
                        <div class="row rcmAppShare"></div>
                    </div>




              </div>
              <div class="share-reply hidden">
                <div class="col-md-6"><button class="btn btn-primary">Share on Facebook</button></div>
                <div class="col-md-6"></div>
              </div>
            </div>
            <div class="col-md-4 clear-padding-right parent-app-relate">
              <div class="col-md-12 app-relate">
                <div class="title-app-relate">
                <div class="fb-like" data-href="http://apphay.dev" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
                <div class="clear"></div>
                  <!-- MUỐN CHƠI HÔNG? -->
                </div>
                <div class="row">

                @if ($apps)
                  @foreach ($apps as $item)
                  <div class="row">
                    <div class="col-md-12 app-relate-item">
                      <div class="col-md-6 col-sm-6 clear-padding-right">
                      @if(!empty($item->thumbnail) && file_exists(public_path($item->thumbnail)))
                      
                        <a href="{{ URL('detail/'.$item->slug) }}"><img src="{{ URL($item->thumbnail) }}" class="img-responsive" /></a>
                      
                      @endif
                      </div>
                      <div class="col-md-6 col-sm-6 title-app clear-padding-right"><a href="{{ URL('detail/'.$item->slug) }}">{{ $item->name }}</a></div>
                    </div>
                    <div class="clear"></div>
                  </div>
                  @endforeach
                @endif

                  <!-- <div class="row">
                    <div class="col-md-12 app-relate-item">
                      <div class="col-md-6 col-sm-6 clear-padding-right">
                        <img src="http://www.appnhe.com/data/images/thumbnail/1113_normal.jpg" class="img-responsive" />
                      </div>
                      <div class="col-md-6 col-sm-6 title-app clear-padding-right"><a>Bao nhiêu người đã cảm nắng bạn trong năm 2016?</a></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 app-relate-item">
                      <div class="col-md-6 col-sm-6 clear-padding-right">
                        <img src="http://www.appnhe.com/data/images/thumbnail/47_normal.jpg" class="img-responsive" />
                      </div>
                      <div class="col-md-6 col-sm-6 title-app clear-padding-right"><a>Chọn ĐÚNG hoặc SAI trong 3 nốt nhạc!</a></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 app-relate-item">
                      <div class="col-md-6 col-sm-6 clear-padding-right">
                        <img src="http://www.appnhe.com/data/images/thumbnail/1099_normal.jpg" class="img-responsive" />
                      </div>
                      <div class="col-md-6 col-sm-6 title-app clear-padding-right"><a>Ai luôn lấy bạn ra làm gương?</a></div>
                    </div>
                  </div> -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8 comment">
            <div class="fb-comments" data-colorscheme="light" data-numposts="5" data-width="100%"></div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-8 info">
            <div class="row">
              <div class="col-md-9 title-info">
                {{$app->name}}
              </div>
              <div class="col-md-3 total-play">LƯỢT CHƠI: <span>{{$app->total_play}}</span></div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="social">
                  <button class="btn btn-info">Tweet</button>
                  <button class="btn btn-danger">Share</button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 desciption">
                {{$app->short_description}}
                {!!$app->description!!}
              </div>
            </div>

            
          </div>
        </div>
        
      </div>
      <div class="clear"></div>

      <hr>

      <footer>
        <ul>
          <li><a>Về App Hay</a></li>
          <li><a>Điều khoản sử dụng</a></li>
          <li><a>&copy; Copyright by Apphay.com</a></li>
        </ul>
      </footer>
    </div>
@if(!empty($script))
<script type="text/javascript" src="{{URL($app->script)}}"></script>
@endif
@endsection