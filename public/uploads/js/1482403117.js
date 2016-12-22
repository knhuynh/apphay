var urlPic = '';
    var user_name = '';
    var first_name = '';
    var gender = '';

    
    randD = Math.floor(Math.random() * 90)+10;

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

    $(document).ready(function () {
       
        $("#btnSubmit").click(function (event) {
            user_name = $("#nameTxt").val();
            if (!user_name) {
                alert('Bạn chưa nhập đầy đủ thông tin');
                $('#nameTxt').focus();
            } else {
                ten = user_name.split(' ');
                ten = ten[ten.length - 1];
                //ten = ar_info[last_element].split(' ');
                //ten = ten[ten.length - 1];
                $(".show_first").css('display', 'none');
                $(".appnhe_show").css("display", "block");
                
                if($("#genderS").val() == 'male'){
                    $(".gameBg").attr("src", "//www.appnhe.com/data/fb/1113_camnang/2.png");
                }else{
                    $(".gameBg").attr("src", "//www.appnhe.com/data/fb/1113_camnang/1.png");
                }
                
                $(".txt").html("Số người đã cảm nắng "+user_name+" trong năm 2016 là:");
                $(".nd").html(randD);
            
                // img = create_img;
                // img.create_img();
                $('.des').html("Trong khi số lượng thanh niên FA không một mảnh tình vắt vai chiếm tới 69% dân số thế giới thì riêng mình "+user_name+" đã khiến cho "+randD+" người cảm nắng! Siêu cao thủ @@ ");

                

            }
        });

        b = top.window.location.href;
        $('#btnShareTw').attr('href', 'https://twitter.com/intent/tweet?via=fun_app&original_referer=' + b + '&text=Go and enjoy this apps with me <3&url=' + b);
        $("#btnShareFb").click(function () {
            $(".fbBtnText").html("Loading...");
            url = top.window.location.href;
            name = 'Bao nhiêu người đã cảm nắng bạn trong năm 2016';
            des = "Xem ngay năm qua bạn đã khiến bao nhiêu người rụng tim :))";
            pic = urlPic;
            mess = '.inputShare';
            call_new_share(url, name, des, pic, mess);
        })

    });

    function done_create_img(a) {
        /*Ham call sau khi tao anh xong*/
        $(".loading").css('display', 'none');
        urlPic = a;
        $('.share-tool').css('display', 'block');
        $('#btnDownload').attr('href', a);
    }