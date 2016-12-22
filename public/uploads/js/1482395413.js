var ar_friends = [];
    var ar_info = [];
    var last_element = '';
    var urlPic = '';
    var user_name = '';

    function check_login_ok(a) {
        FB.api("/me", function (res) {
            user_name = res.name;
            gender = res.gender;
            $(".ip_name").val(user_name);
            $(".avt").attr('src', '//graph.facebook.com/' + res.id + '/picture?width=400&height=400');
            //first_name = res.first_name;
        })
        get_tat_friends();
    }

    function done_load_friends(a, b) {
        ar_friends = a;
        ar_info = b;
        arr_top_fr = select_top_frirends(ar_friends, 15);
        last_element = elm_ar_random(arr_top_fr);
        $('.fr1_img').attr("src", "https://graph.facebook.com/" + last_element + "/picture?width=400&height=400");

    }
    $(document).ready(function () {

        $(".result_app").click(function (event) {
            user_name = $(".ip_name").val();
            if (!user_name) {
                alert("Bạn chưa nhập tên");
                $('.ip_name').focus();
            } else {
                ten = user_name.split(' ');
                ten = ten[ten.length - 1];
                ten1 = ar_info[last_element].split(' ');
                ten1= ten1[ten1.length - 1];
                $(".show_first").css('display', 'none');
                $(".appnhe_show").css("display", "block");
                setTimeout(function () {
                    $(".avt").css("display", "block");
                    $(".avt").addClass("magictime swashIn");
                    $(".ten1").css("display", "block");
                    $(".ten1").addClass("magictime spaceInDown");
                }, 1000);

                setTimeout(function () {
                    $(".fr1_img").css("display", "block");
                    $(".fr1_img").addClass("magictime swashIn");
                    $(".ten2").css("display", "block");
                    $(".ten2").addClass("magictime spaceInDown");
                }, 2500);
                $('.ten1').html(user_name);
                $('.ten2').html(ar_info[last_element]);

                setTimeout(function () {
                    $(".nd").css("display", "block");
                    $('.nd').html("Tết này "+ten1+" sẽ dẫn bạn về ra mắt gia đình đấy ^^");
                    $(".nd").addClass("magictime swashIn");
                }, 3500);

                setTimeout(function () {
                   // img = create_img;
                    //img.create_img();
                    $('.des').html("Tình cảm giữa bạn và "+user_name+" đã chín muồi rồi và tết này là lúc người ấy dẫn bạn về ra mắt gia đình đấy. Hóng một happy ending dành cho hai bạn ^^");

                }, 5500);
                

            }
        });

        b = top.window.location.href;
        $('#btnShareTw').attr('href', 'https://twitter.com/intent/tweet?via=fun_app&original_referer=' + b + '&text=Go and enjoy this apps with me <3&url=' + b);
        $("#btnShareFb").click(function () {
            $(".fbBtnText").html("Loading...");
            url = top.window.location.href;
            name = 'Tết này ai sẽ dẫn bạn về ra mắt gia đình?';
            des = "Tết này không sợ ông bà ba má truy xét về người yêu nữa rồi :))";
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