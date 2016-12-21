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
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <button class="btn btn-primary" onclick="myFacebookLogin()"><span style="font-weight:bold; font-size:15px">f</span> Login</button>
            <div class="form-group">
              <input type="text" placeholder="Tìm ứng dụng ..." class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="">
      <div class="container wrapper">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8 player">Playing app</div>
            <div class="col-md-4 clear-padding-right parent-app-relate">
              <div class="col-md-12 app-relate">
                <div class="title-app-relate">
                  <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div> 
                  <!-- MUỐN CHƠI HÔNG? -->
                </div>
                <div class="row">

                @if ($apps)
                  @foreach ($apps as $app)
                  <div class="row">
                    <div class="col-md-12 app-relate-item">
                      <div class="col-md-6 col-sm-6 clear-padding-right">
                        <a href="detail/{{ $app->id }}"><img src="{{ $app->image }}" class="img-responsive" /></a>
                      </div>
                      <div class="col-md-6 col-sm-6 title-app clear-padding-right"><a href="detail/{{ $app->id }}">{{ $app->name }}</a></div>
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
      <div class="col-md-12 info-comment">
        <div class="row">
          <div class="col-md-8 info">
            <div class="row">
              <div class="col-md-9 title-info">
                Gửi lời chúc Noel ý nghĩa đến bạn bè
              </div>
              <div class="col-md-3 total-play">LƯỢT CHƠI: <span>6,345</span></div>
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
                <strong>App Hay</strong> Chúng tôi liên tục phát triển và sáng tạo những ứng dụng trên Facebook giúp cho người dùng giải trí và trải nghiệm những điều thú vị. Các ứng dụng do appnhe.com lên ý tưởng và sáng tạo theo phong cách riêng, đơn giản và rất độc đáo, mang lại cho người dùng trải nghiệm mới lạ khi lướt Facebook. Ngoài ra, ngoài tính giải trí, appnhe.com cũng mang lại những trải nghiệm ứng dụng an toàn hơn cho người dùng Facebook khắp Việt Nam và trên toàn thế giới.<br>
                <br>
                Với nền tảng kiến thức và kinh nghiệm đa dạng về xã hội thực tế và mạng xã hội Facebook, appnhe.com tin tưởng luôn mang tới nhiều niềm vui, trải nghiệm thú vị và an toàn cho người dùng Facebook.<br>
                <br>
                Bên cạnh đó, trong tương lai gần, appnhe.com luôn hướng tới mục tiêu hỗ trợ cộng đồng tự tạo ra những ứng dụng Facebook hấp dẫn, cập nhật đồng thời giúp cho cộng đồng kiếm được nguồn thu nhập chính đáng dựa trên những ứng dụng, sản phẩm giải trí do chính mình làm ra, dựa trên nền tảng apphay.com.<br>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="app-relate2">
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1108_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Tổng kết năm 2016 của bạn bằng 4 bức ảnh</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1105_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Linh vật của bạn là gì?</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/682_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Thưởng tết năm nay của bạn có gì?</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1089_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Nhìn nhân trung dự đoán vận mệnh</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1100_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Bạn đã bày tỏ cảm xúc bao nhiêu lần suốt năm qua?</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1098_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Ai sẽ ký hợp đồng tình yêu với bạn?</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1086_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Noel này bạn sẽ được nhận quà gì?</a></div>
                  </div>
                  <div class="col-md-3 app-relate2-item">
                    <a><img src="http://www.appnhe.com/data/images/thumbnail/1075_normal.jpg" class="img-responsive" /></a>
                    <div class="title-app-relate2-item"><a>Ai là định mệnh của đời bạn?</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 comment">
            <div class="fb-comments" data-href="http://apphay.com" data-colorscheme="light" data-numposts="5" data-width="100%"></div>
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

@stop