<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AppHay.com</title>

    <link rel="icon" href="{{ URL::asset('img/mini_icon.png') }}" type="image/x-icon"/>
    <link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/github.min.css')}}">
    <link href="{{ URL::asset('assets/css/carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

    <style media="" href="{{URL::asset('assets/css/gib.css') }}"></style>


<link media="" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=latin,vietnamese">
<style media="">.ip-header{position:fixed;top:0;z-index:100;min-height:480px;width:100%;height:100%;background:#f1f1f1;z-index:10000;}.ip-header h1{margin:0;}.ip-loader img{padding-bottom:30px;}.ip-loader{position:absolute;left:0;width:100%;opacity:0;cursor:default;pointer-events:none;text-align:center;}.ip-loader{bottom:45%;}.ip-header .ip-inner{display:block;margin:0 auto;}.ip-header .ip-loader svg path{fill:none;stroke-width:6;}.ip-header .ip-loader svg path.ip-loader-circlebg{stroke:#ddd;}.ip-header .ip-loader svg path.ip-loader-circle{-webkit-transition:stroke-dashoffset 0.2s;transition:stroke-dashoffset 0.2s;stroke:#f2711c;}.loading .ip-loader{opacity:1;-webkit-animation:animInitialHeader 1s cubic-bezier(0.7,0,0.3,1) both;animation:animInitialHeader 1s cubic-bezier(0.7,0,0.3,1) both;}.loading .ip-loader{-webkit-animation-delay:0.2s;animation-delay:0.2s;}@-webkit-keyframes animInitialHeader{from{opacity:0;-webkit-transform:translate3d(0,800px,0);}}@keyframes animInitialHeader{from{opacity:0;-webkit-transform:translate3d(0,800px,0);transform:translate3d(0,800px,0);}}.loaded .ip-loader{opacity:1;}@-webkit-keyframes animLoadedLogo{to{-webkit-transform:translate3d(0,100%,0) translate3d(0,50px,0) scale3d(0.65,0.65,1);}}@keyframes animLoadedLogo{to{-webkit-transform:translate3d(0,100%,0) translate3d(0,50px,0) scale3d(0.65,0.65,1);transform:translate3d(0,100%,0) translate3d(0,50px,0) scale3d(0.65,0.65,1);}}.loaded .ip-loader{-webkit-animation:animLoadedLoader 0.5s cubic-bezier(0.7,0,0.3,1) forwards;animation:animLoadedLoader 0.5s cubic-bezier(0.7,0,0.3,1) forwards;}@-webkit-keyframes animLoadedLoader{to{opacity:0;-webkit-transform:translate3d(0,-100%,0) scale3d(0.3,0.3,1);}}@keyframes animLoadedLoader{to{opacity:0;-webkit-transform:translate3d(0,-100%,0) scale3d(0.3,0.3,1);transform:translate3d(0,-100%,0) scale3d(0.3,0.3,1);}}.loaded .ip-header{-webkit-animation:animLoadedHeader 1s cubic-bezier(0.7,0,0.3,1) forwards;animation:animLoadedHeader 1s cubic-bezier(0.7,0,0.3,1) forwards;}@-webkit-keyframes animLoadedHeader{to{-webkit-transform:translate3d(0,-100%,0);}}@keyframes animLoadedHeader{to{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);}}.loaded .ip-main h2,.loaded .ip-main .browser,.loaded .ip-main .browser .box,.loaded .codrops-demos{-webkit-animation:animLoadedContent 1s cubic-bezier(0.7,0,0.3,1) both;animation:animLoadedContent 1s cubic-bezier(0.7,0,0.3,1) both;}.loaded .ip-main .browser,.loaded .ip-main .browser .box:first-child{-webkit-animation-delay:0.1s;animation-delay:0.1s;}.loaded .ip-main .browser .box:nth-child(2){-webkit-animation-delay:0.15s;animation-delay:0.15s;}.loaded .ip-main .browser .box:nth-child(3){-webkit-animation-delay:0.2s;animation-delay:0.2s;}@-webkit-keyframes animLoadedContent{from{opacity:0;-webkit-transform:translate3d(0,200px,0);}}@keyframes animLoadedContent{from{opacity:0;-webkit-transform:translate3d(0,200px,0);transform:translate3d(0,200px,0);}}.layout-switch .ip-header{position:absolute;}.no-js .ip-header{position:relative;min-height:0px;}@media screen and (max-width: 45em) {.ip-main h2{font-size:2.25em;font-size:10vw;}.box{width:100%;}}body{font-family:'Roboto Condensed',sans-serif;font-size:1.5em;background-color:#e9e9e9;}a{color:inherit;text-decoration:none;cursor:pointer;}a:hover{text-decoration:none;}.ui.cards .card .image img{display:block;width:100%;height:auto;border-radius:inherit;}.banner-panel,.banner-text,.banner-img{padding:0;}.banner-panel .banner-text{padding:15px;padding-bottom:30px;}.banner-text .title{margin-top:10px;text-transform:uppercase;font-weight:bold;font-size:1.5em;}.game-grid{padding-top:10px;}.game-grid>div{padding:10px;}.ui.search{padding:0;margin-top:7px;}.ui.search .ui.input{width:100%;}.ui.search .ui.input input{font-size:0.85em;border:1px solid rgba(205,82,0,0.15);}.ui.input input:focus,.ui.input.focus input{border-color:#cd5200;background:#fff;color:rgba(0,0,0,.8);box-shadow:none;}.small-text{font-size:0.75em!important;}.orange-text{color:#f2711c!important;}.card .content .header{font-size:1em!important;min-height:39px;}.card .content .header:hover{text-decoration:none;}.ui.inverted.button.large-btn{font-size:1em!important;}.ui.cards>.card{margin:10px auto;width:100%;}.ui.search>.results{width:100%;}.ui.cards{padding:0 5px;}.ui.menu.orange-menu{margin-top:10px!important;margin-bottom:0px!important;}.ui.menu.orange-menu .item{font-size:1.5em!important;font-weight:bold!important;}.ui.menu.orange-menu .active.item{background:#f2711c;color:rgba(255,255,255,0.95);font-weight:400;box-shadow:none;}.total-panel{padding:0;min-height:100%;}.total-panel .row{margin:0;}.search-panel-btn{position:absolute;color:#fff;top:0;right:0;padding:10px;font-size:1.5em;}.search-panel-btn:hover{color:#fff;text-decoration:none;cursor:pointer;}.shadow-bg{position:fixed;top:0;left:0;width:100%;height:100%;z-index:100;display:none;background-color:rgba(0,0,0,0.2);}.shadow-bg.active{display:block;}@media (max-width: 767px){.dropdown-menu .text{font-size:0.75em;}.search-panel{position:fixed;z-index:9999;display:none;}.search-panel.active{display:block;}.navbar-header.deactive{display:none;}}@media (max-width: 550px)  {.card .content .header{min-height:60px;}.YlkGameContainer{height:400px!important;}.ylinkee_about_body{display:none;}}@media (max-width: 375px) {.card .content .header{min-height:39px;}}.large-btn.fade{opacity:1;}.large-btn .hidden.content{display:block!important;}.setMaxHeight{max-height:67px;}.ui.button.scrollToTop{position:fixed!important;display:none;cursor:pointer;bottom:10px;right:10px;}.scrollToTop i{font-size:25px;line-height:18px;}footer{width:100%;}.fa-footer{margin-top:10px;color:#666666;}.fa-footer .footer-help{height:100%;padding-top:7px;padding-bottom:7px;}.fa-footer .footer-help a{color:#666666;font-size:1em;margin-right:20px;}.fa-footer .footer-help a:hover{color:#f2711c;text-decoration:none;}.loading-bg{position:fixed;width:100%;height:100%;z-index:9999;background-color:#fff;}</style>
<style media="" data-href="//www.appnhe.com/css/ver2/play2.css">.ui.segments.dropdown-menu{position:absolute;padding:0;}.dropdown-menu .ui.segment{padding:0;height:73px;width:350px;}.dropdown-menu .ui.segment .small-text{color:#f2711c;}.dropdown-menu .ui.segment a{padding:5px 0 5px 5px;height:100%;white-space:inherit;line-height:18px!important;max-height:45px;}.dropdown-menu .ui.segment hr{margin:5px 5px 5px 0;}.dropdown-menu .ui.segment div{padding:0;height:100%;}.dropdown-menu .text{text-align:left!important;font-weight:bold;padding-left:5px!important;}.dropdown-menu .ui.segment a:hover,.dropdown-menu .ui.segment a:active{background-color:transparent!important;z-index:2;color:#23527c!important;}.closeLikeBox{position:absolute;top:5px;right:10px;font-weight:bold;color:#888;font-size:20px;cursor:pointer;}.closeLikeBox:hover{color:#555;}.user-nav-panel{color:#fff;padding:10px 0 10px 0;text-align:left;white-space:nowrap;}@media (max-width: 992px) {.min-pad{padding-left:5px!important;padding-right:5px!important;}}@media (max-width: 767px){.user-nav-panel{padding-left:10px;}.dropdown{padding-left:5px;}.dropdown-toggle{text-align:left;}.ui.segments.dropdown-menu{position:static;margin:5px 0;text-align:center;}.dropdown-menu .ui.segment{display:inline-block!important;}.dropdown-menu .ui.segment a{padding:5px!important;color:#000!important;}}.offset-left-750{position:absolute;left:750px;}.total-area{padding-top:60px;}.list-area{position:absolute;top:60px;padding:0;margin-left:10px;z-index:1;}.YlkGameRcm0,.YlkGameRcm1,.YlkGameRcm2{height:500px;}.l-panel{margin-right:0;margin-left:0;width:-moz-calc(100% - 750px);min-width:-webkit-calc(100% - 750px);min-width:calc(100% - 750px);overflow:hidden;}.play-area{width:750px;z-index:2;}.YlkGameContainer{min-height:450px;padding:0!important;}.l-panel .ui.orange.segment{text-align:center;text-transform:uppercase;border-top:2px solid #f2711c!important;font-weight:bold;font-size:17px;line-height:20px;}.ui.orange.segment .align-left{text-align:left;padding-left:7px!important;}.l-panel{border-top:0!important;}.socialLikePage{display:inline-block;}.l-panel .l-item-panel{padding:5px!important;height:100px;}.l-img-panel{padding:0;overflow:hidden;}.l-info-panel{padding-left:10px;padding-right:0px;}.l-info-panel .l-title{font-weight:bold;height:50px;font-size:17px;}.social-btn{margin-bottom:5px!important;min-width:75px;}.social-btn:hover{background-color:rgba(255,255,255,0.5);cursor:pointer;}.p-txt-title{font-size:1.25em;font-weight:bold;}#app-rating{font-size:1em;}#app-rating .icon{line-height:26px;}.v-info-panel .stat{text-align:right;}.p-txt-small{font-size:0.85em;line-height:25px;}.carousel-shadow.play{position:relative;width:100%;background:none;}.carousel.play.slide{margin-top:-15px;}.comment-area{margin-top:-15px!important;}.comment-title{font-size:1.25em;font-weight:bold;text-align:center;cursor:pointer;}.comment-title .label{top:-3px;}.carousel.play.slide .carousel-inner .item{margin-top:0;margin-bottom:0;}.gameContainer{position:absolute;top:0;left:0;width:100%;height:100%;}.stat .p-txt-small,.stat .p-txt-title{display:inline-block;}.partContent{display:block;position:absolute;left:0;right:0;top:250px;bottom:0;width:100%;height:auto;min-height:50%;}.img_mark{position:absolute;left:0;right:0;top:-14%;width:100%;}.markPlayApp{text-align:center;margin-top:10px;}.markPlayApp .button{text-align:center;font-size:1.25em!important;min-width:150px;}.markViewResult{position:absolute;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.87);z-index:99;display:none;}.markViewResult div{color:#fff;padding:10px 15px;background-color:#F47820;display:inline-block;margin-top:150px;border-radius:5px;font-weight:bold;}.ui.fade{opacity:1;}.hidden.content{display:block!important;}.startGame{}.ui.tiny.image{width:auto;height:64px;}.img-list{width:auto;height:90px;}.markPlayApp h4{padding:10px;}.share-tool{display:none;text-align:center;margin-top:-11px!important;}.share-tool>a{margin-top:5px!important;margin-bottom:5px!important;font-size:1.15em!important;}.rcmPlayArea .button{margin-top:10px!important;font-size:20px!important;padding:10px!important;}.rcmPlayArea .row{margin:0;padding:10px;}.rcmPlayArea .row>div{padding:5px;}.rcmPlayArea .img-segment,.rcmPlayArea .txt-segment{padding:5px!important;}.rcmPlayArea .txt-segment{height:55px;}.signin-btn{font-weight:normal!important;font-family:'Roboto Condensed'!important;padding-top:9px!important;padding-bottom:9px!important;}.slider{z-index:1;position:relative;height:100%;height:500px;margin-top:-20px!important;}.slider.animating{-webkit-transition:-webkit-transform 0.5s;transition:-webkit-transform 0.5s;transition:transform 0.5s;transition:transform 0.5s,-webkit-transform 0.5s;will-change:transform;}.slide{position:absolute!important;top:0;width:100%;height:500px;margin-top:0!important;margin-bottom:0!important;}.slide:nth-child(1){left:0!important;}.slide:nth-child(2){left:100%!important;}.slide:nth-child(3){left:200%!important;}.markResultLast{position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,0.7);z-index:10000;}.ContainerResult{width:100%;max-width:500px;min-width:300px;background:#fff;margin:auto;border-radius:10px;text-align:center;margin-top:150px;padding-bottom:1px;position:relative;box-shadow:2px 3px 4px rgba(0,0,0,0.42);-ms-transform:rotate(6deg);-webkit-transform:rotate(6deg);transform:rotate(6deg);}.ContainerResult{overflow:hidden;transition-duration:0.5s;transition-property:transform;}.ContainerResult:hover{transform:rotate(-1deg);-webkit-transform:rotate(-1deg);}.ContainerResult img{width:100%;}.shareResultBt{margin-bottom:5px;margin-top:10px;}.ContainerResult .socialLikePage{margin-top:4px;}.titleResutl{padding:5px;font-size:20px;color:#fff;background-color:#3b5998;border-radius:8px 8px 0 0;}.ContainerResult .closeLikeBox{position:absolute;top:0;right:10px;font-weight:bold;color:#F7F7F7;font-size:20px;cursor:pointer;padding:5px;}@media (max-width: 992px) {.hidden-footer{display:none;}.list-area{position:relative;top:0;margin-top:10px;margin-left:0;}.offset-left-750{width:100%;left:0;}.l-info-panel{padding-right:100px;}}@media (max-width: 767px) {.share-tool>a{width:230px;}.social-panel .ui.button{font-size:1.25rem!important;}.social-panel .stat{height:1.25rem!important;line-height:4rem;}.play-area{width:100%;}.YlkGameContainer{min-height:80vw;}}@media (max-width: 598px){.partContent{top:150px;}.hidden-mobile{display:none!important;}.l-info-panel{padding-right:50px;}.YlkGameContainer{height:auto!important;}}@media (max-width: 480px){.rcmPlayArea .col-xs-4{width:50%!important;}.v-info-panel .col-xs-9,.v-info-panel .col-xs-3{width:100%;}.img_mark{top:-9%;}.ui.segments.dropdown-menu{width:100%;padding-right:5px!important;}.dropdown-menu .ui.segment{width:100%;margin-left:0px!important;}.l-info-panel{padding-right:0px;}.markPlayApp h4{font-size:1.25em;}.title-panel .stat{text-align:left;}.downPic{padding:8px;font-size:inherit;}}@media (max-width: 325px) {.rcmPlayArea .txt-segment{height:75px;}}.buttonOption{cursor:pointer;display:inline-block;min-height:1em;outline:0;border:none;vertical-align:baseline;background:#e0e1e2;color:rgba(0,0,0,.6);font-family:Arial,Helvetica,sans-serif;margin:5px .25em 5px 0;padding:0.5em 0.5em;text-transform:none;text-shadow:none;font-weight:700;line-height:1em;font-style:normal;text-align:center;text-decoration:none;border-radius:.28571429rem;box-shadow:0 0 0 1px transparent inset,0 0 0 0 rgba(34,36,38,.15) inset;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:opacity .1s ease,background-color .1s ease,color .1s ease,box-shadow .1s ease,background .1s ease;transition:opacity .1s ease,background-color .1s ease,color .1s ease,box-shadow .1s ease,background .1s ease;will-change:'';-webkit-tap-highlight-color:transparent;}.buttonOption:hover{opacity:0.85;-webkit-transition:opacity 300ms linear;-moz-transition:opacity 300ms linear;-o-transition:opacity 300ms linear;-ms-transition:opacity 300ms linear;transition:opacity 300ms linear;}.buttonOption:active{opacity:0.93;}#ShareOnFbBt{background-color:#3b5998;color:#fff;text-shadow:none;background-image:none;box-shadow:0 0 0 0 rgba(34,36,38,.15) inset;padding:15px 20px;font-size:19px;}#ShareOnFbBt:hover{background-color:#304d8a;color:#fff;text-shadow:none;}.buttonOption i{display:inline-block;opacity:1;margin:0 .25rem 0 0;width:1.18em;height:1em;font-family:Icons;font-style:normal;font-weight:400;text-decoration:inherit;text-align:center;font-size:1em!important;speak:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;-webkit-backface-visibility:hidden;backface-visibility:hidden;}#ShareOnFbTw{background-color:#0084b4;color:#fff;text-shadow:none;background-image:none;box-shadow:0 0 0 0 rgba(34,36,38,.15) inset;}#ShareOnFbTw:hover{background-color:#00719b;color:#fff;text-shadow:none;}#ShareOnFbBt i:before{content:"\f09a";}#ShareOnFbTw i:before{content:"\f099";}.downPic{background-color:#21ba45;color:#fff;text-shadow:none;background-image:none;box-shadow:0 0 0 0 rgba(34,36,38,.15) inset;padding:15px 20px;font-size:19px;}.downPic:hover{background-color:#16ab39;color:#fff;text-shadow:none;}.markLoadImg{position:absolute;left:0;right:0;top:0;bottom:0;background-color:#fff;text-align:center;display:none;z-index:80;max-width:750px;}.markLoadImg h1{color:#f48720;margin-top:100px;}.markLoadImg img{position:relative;top:30px;}.MarkDoneBt{text-align:center;position:absolute;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.45);z-index:90;}.partScoial .shareSocialBox{width:100px;height:40px;margin-right:5px;display:inline-block;vertical-align:top;cursor:pointer;}.partScoial .shareFb{background-color:#3b5999;}.markLogin .loginWithFacebook{width:auto;margin-top:20px;}.markLogin .loginWithFacebook:hover{background-color:#2557C1;-webkit-transition:background-color 300ms linear;-moz-transition:background-color 300ms linear;-o-transition:background-color 300ms linear;-ms-transition:background-color 300ms linear;transition:background-color 300ms linear;}.markLogin .loginWithFacebook:active{background-color:#2C3E63;}.partScoial .shareSocialBox i{background-image:url("http://www.linkme.vn/images/icon/social90px.png");height:30px;width:20px;background-repeat:no-repeat;background-position:0 0;background-size:250px;display:block;margin:5px 0 0 5px;}.markLogin .shareSocialBox i{display:inline-block;vertical-align:middle;}.loginWithFacebook span{vertical-align:middle;color:#fff;margin:5px 10px 0 5px;font-size:17px;display:inline-block;}.mainGame .input{border:1px solid #CCC;color:#333;text-shadow:0 1px #FFF;white-space:nowrap;padding:8px 8px 7px;border-radius:3px;width:200px;}.mainGame .input:hover{border-color:#CCC #C2C2C2 #B8B8B8;}.mainGame .input:hover{border-color:#CCC #C2C2C2 #B8B8B8;}.appvui_share .input{width:70%;font-size:15px;margin-bottom:5px;display:none;}.doneSearch{cursor:pointer;pointer-events:inherit!important;}.ip-container{display:block!important;}.matrix{display:none;width:100%;height:100%;padding:2vw 20vw;z-index:10001;background:#f1f1f1;position:fixed;top:0;left:0;text-align:center!important;}.matrix>img{opacity:0;padding:1vw;width:10vw!important;height:10vw!important;display:inline-block!important;}.matrix .name-display{position:absolute;width:25vw;top:38vw;left:36.5vw;font-size:2.5vw;font-weight:bold;}.matrix .name-display>div{position:absolute;top:0;left:0;right:0;opacity:0;}.matrix .gif-load{position:absolute;width:15vw;top:35.5vw;left:42vw;}.matrix .gif-load img{width:100%;height:auto;}.matrix .calculating{position:absolute;width:25vw;top:32vw;left:37.5vw;font-size:2.5vw;font-weight:bold;}.markLogin{position:absolute;top:0;left:0;right:0;bottom:0;background-color:#fff;padding-top:0;text-align:center;z-index:99;display:none;}@media (max-width: 767px){.matrix{display:none;width:100%;height:100%;padding:3vw 10vw;z-index:10001;background:#f1f1f1;position:fixed;top:0;left:0;text-align:center!important;}.matrix>img{opacity:0;padding:1vw;width:15vw!important;height:15vw!important;display:inline-block!important;}.matrix .name-display{position:absolute;width:33vw;top:61.5vw;left:32.5vw;font-size:4.5vw;font-weight:bold;}.matrix .name-display>div{position:absolute;top:0;left:0;right:0;opacity:0;}.matrix .gif-load{position:absolute;width:25vw;top:56.5vw;left:37vw;}.matrix .gif-load img{width:100%;height:auto;}.matrix .calculating{position:absolute;width:25vw;top:50vw;left:37.5vw;font-size:4.5vw;font-weight:bold;}}
.ui.avatar.image, .ui.avatar.image img, .ui.avatar.image svg, .ui.avatar.images .image, .ui.avatar.images img, .ui.avatar.images svg {
    margin-right: .25em;
    display: inline-block;
    width: 2em;
    height: 2em;
    border-radius: 500rem;
}
</style>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
 var user_id ='';
    var user_check ='';
    var user_name = '';
    var game_id = "1113";
    var url_social = 'http://www.appnhe.com/1113/bao-nhieu-nguoi-da-cam-nang-ban-trong-nam-2016';
    var name_game = 'Bao nhiêu người đã cảm nắng bạn trong năm 2016?';
    var count_play = '5678';
    var accessToken = '';
    var checkLoginStatus = false;
    var urlPic = '';
    function check_login_ok(a) {
        FB.api("/me?fields=name, gender", function (res) {
            user_name = res.name;
            gender = res.gender;
            $("#nameTxt").val(user_name);
            $("#genderS").val(gender);
            $(".avt").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=400&height=400');
            $(".avt1").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=400&height=400');
            //first_name = res.first_name;
        })
        /*FB.api('/me?fields=first_name', function(response) {
            //alert(response.first_name);
            first_name = response.first_name;
            
        });*/
    }

  // This is called with the results from from FB.getLoginStatus().
  // function statusChangeCallback(response) {
  //   console.log('statusChangeCallback');
  //   console.log(response);
  //   // The response object is returned with a status field that lets the
  //   // app know the current login status of the person.
  //   // Full docs on the response object can be found in the documentation
  //   // for FB.getLoginStatus().
  //   if (response.status === 'connected') {
  //     // Logged into your app and Facebook.
  //     $('.markPlayApp').show();
  //     check_login_ok();
    
  //   } else if (response.status === 'not_authorized') {
  //     // The person is logged into Facebook, but not your app.
  //     //document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
  //     $('.markLogin').show();
  //   } else {
  //     // The person is not logged into Facebook, so we're not sure if
  //     // they are logged into this app or not.
  //     //document.getElementById('status').innerHTML = 'Please log ' +'into Facebook.';
  //   }
  // }
  function load_user_info(a,b){
    console.log(a+"-"+b);$(".userAvtar").attr('src','https://graph.facebook.com/'+a+'/picture');if(user_name!='')$(".userName").html(user_name);
}

  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    if (response.status === 'connected') {
        user_id = response.authResponse.userID;
        accessToken = response.authResponse.accessToken;
        checkLoginStatus = true;
        $(".markLogin").css('display', 'none');
        $(".signin-btn").css('display', 'none');
        $(".userName").css('display', 'inline-block');
        $(".popup-logout").css('opacity', '1');
        $(".signout-btn").css('display', 'block');
        $(".userAvtar").css('display', 'inline-block');
        $(".markPlayApp").css('display', 'block');
        if (user_check === '') {
            FB.api("/me?fields=name,gender,locale", function(res) {
                user_name = res.name;
                load_user_info(user_id, user_name);
                
            })
        } else {
            load_user_info(user_id, user_name);
        }
        check_login_ok();
    } else if (response.status === 'not_authorized') {
        checkLoginStatus = false;
        $(".markLogin").css('display', 'block');
        $(".signin-btn").css('display', 'block');
        $(".userName").css('display', 'none');
        $(".popup-logout").css('opacity', '0');
        $(".signout-btn").css('display', 'none');
        $(".userAvtar").css('display', 'none');
        check_login_none();
    } else {
        checkLoginStatus = false;
        $(".markLogin").css('display', 'block');
        $(".signin-btn").css('display', 'block');
        $(".userName").css('display', 'none');
        $(".popup-logout").css('opacity', '0');
        $(".signout-btn").css('display', 'none');
        $(".userAvtar").css('display', 'none');
        check_login_none();
    }
}


  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1333233490033864',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {

    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function getUserInfo() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api("/me?fields=name,gender", function (res) {
            user_name = res.name;
            gender = res.gender;
            $("#nameTxt").val(user_name);
            $("#genderS").val(gender);
            $(".avt").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=400&height=400');
            $(".avt1").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=400&height=400');
            //first_name = res.first_name;
        })
  }

  function loginFB(){
    FB.login(function(response) {
    // handle the response
    console.log(response);
  }, {
      scope: 'public_profile,user_friends,user_photos,user_posts', 
      return_scopes: true
  });
  }
  function loginWithFb() {
        FB.login(function(response) {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }, {
            scope: 'public_profile,user_friends,user_posts,user_photos'
        });
    }
  function getFriends(){
    console.log('friend-list-id');
    /* make the API call */
    FB.api(
        "/{friend-list-id}",
        function (response) {
          if (response && !response.error) {
            /* handle the result */
            console.log('friend-list-id',response);
          }
        }
    );
  }

  function getFriendList(){
    FB.api(
      '/me',
      'GET',
      {"fields":"id,name,taggable_friends{name,picture,id}"},
      function(response) {
          // Insert your code here
          console.log(response);
      }
    );
  }
  function elm_ar_random(ar){
    var z=Math.floor((Math.random()*ar.length));
    a=ar[z];
    var index=ar.indexOf(a);
    if(index>=0){
        ar.splice(index,1);
    }
    return a;
  }
  function getSortedKeys(obj){var keys=[];for(var key in obj)keys.push(key);return keys.sort(function(a,b){return obj[a]-obj[b]});}
function done_load_friends(a,b){console.log(a);console.log(b);}
function select_top_frirends(a,b){count_fr=0;c=[];for(x=a.length- 1;x>=0;--x){c[count_fr]=a[x];count_fr++
if(count_fr==15)break;}
return c;}
function get_tat_friends(){
        var ar_friends=[];
        ar_fr_info=[];
        FB.api('me/posts?fields=likes,comments',function(data){
            obj=data['data'];
            for(x in obj){
                if(obj[x]['likes']!=null){
                    obj_like=obj[x]['likes']['data'];
                    for(y in obj_like){
                        if(ar_friends[obj_like[y]['id']]==null){
                            ar_friends[obj_like[y]['id']]=1;
                            ar_fr_info[obj_like[y]['id']]=obj_like[y]['name'];
                        }else{
                            ar_friends[obj_like[y]['id']]+=1;
                            ar_fr_info[obj_like[y]['id']]=obj_like[y]['name'];
                        }
                    }
                }
                if(obj[x]['comments']!=null){
                    obj_like=obj[x]['comments']['data'];
                    for(y in obj_like){if(ar_friends[obj_like[y]['from']['id']]==null){
                        ar_friends[obj_like[y]['from']['id']]=1;
                        ar_fr_info[obj_like[y]['from']['id']]=obj_like[y]['from']['name'];
                    }else{
                        ar_friends[obj_like[y]['from']['id']]+=2;
                        ar_fr_info[obj_like[y]['from']['id']]=obj_like[y]['from']['name'];
                    }
                }
            }
        }

        ar_friends=getSortedKeys(ar_friends);

        var index=ar_friends.indexOf(user_id);
        if(index>=0){ar_friends.splice(index,1);
        }
        done_load_friends(ar_friends,ar_fr_info);
    });
    }

function startWithLogin(){
    $('.MarkDoneBt').hide();
}

  $(function(){
    $('.markPlayApp').click(function(){
        $('.MarkDoneBt').hide();
    });
  });
</script>
  </head>

  <body>

    @yield('content')

    <!-- <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script> -->
    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/ie-emulation-modes-warning.js') }}"></script>
    <script src="{{ URL::asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/main.js')}}"></script>
  </body>
</html>