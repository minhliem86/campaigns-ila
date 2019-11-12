<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{!! asset('public/favicon.ico') !!}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('public/assets/teacherday/css/style.css') !!}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    @if(Route::currentRouteName() == 'teacherday')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
    @endif

    @yield('tracking')
    

    <title>ILA - Teacher Day 2019</title>
</head>
<body>
    <div class="page">
        <header id="navbar-ila">
            <nav class="navbar navbar-expand-lg affix-top">
                <a class="logo btn-scroll" data-scroll="#banner-section" href="#">
                    <img src="{!! asset('public/assets/backtohome') !!}/imgs/logo.png" class="img-fluid" alt="ILA Back To Home">
                </a>
                @if($mobile_detect->isMobile())
                    <button class="btn-cta float-right btn-register " data-scroll="#form-wrapper" href="#" class="btn-scroll">Đăng Ký Tư Vấn</button>
                @endif
                <div class="collapse navbar-collapse justify-content-end" id="navbar-backtohome">
                    <ul class="nav navbar-nav">
                        <li>
                            <a data-scroll="#chuongtrinhhoc" href="#chuongtrinhhoc" class="btn-scroll">Chương Trình Học</a>
                        </li>

                        <li>
                            <a data-scroll="#moitruonghoc" href="#moitruonghoc" class="btn-scroll">
                                TẠI SAO CHỌN ILA </a>
                        </li>
                        @if(Route::currentRouteName() != 'teacherday.thanks')
                        <li class="register-tab">
                            <a class="btn-cta btn-scroll" data-scroll="#banner-section" href="#">
                              @if(Route::currentRouteName() == 'teacherday')   
                                    Đăng Ký Tư Vấn
                              @elseif (Route::currentRouteName() == 'otp.get')
                                    Xác thực OTP
                              @endif
                              </a>
                        </li>
                        @endif
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </header>
        {{--BANNER--}}
        <section class="banner section" id="banner-section">
            <div class="banner">
                @if(!$mobile_detect->isMobile())
                <img src="{!! asset('public/assets/teacherday/imgs/teacherday/banner.jpg') !!}" class="img-fluid" alt="ILA Back To Home">
                @else
                <img src="{!! asset('public/assets/teacherday/imgs/mobile-b2h-banner.jpg') !!}" class="img-fluid" alt="ILA Back To Home">
                @endif
            </div>

            @yield('content')
            
        </section>


        {{--CHUONG TRINH HOC--}}
        <section class="chuongtrinhhoc-section" id="chuongtrinhhoc">
            <div class="chuongtrinhhoc-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="title-wrapper">
                                <h2 class="title-chuongtrinhhoc text-center">Chương trình học</h2>
                                <p class="sub-title">Đội ngũ giáo viên tại ILA với <b>100% giáo viên trình độ bản ngữ</b> đã có bằng cử nhân hoặc thạc sĩ & bằng cấp giảng dạy Anh ngữ được chứng nhận quốc tế. Không chỉ hiểu được nhu cầu của các học viên, các giáo viên còn hết mình giúp đỡ từng học viên đạt được mục tiêu học tập của mình.</p>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="each-propram" >
                                <img src="{!! asset('public/assets/teacherday/imgs/js.png') !!}" class="img-fluid" alt="">
                                <div class="control-wrapper">
                                    <p data-id="jumpstart" class="program-trigger">JUMPSTART</p>
                                </div>
                                <div class="reason-content" id="jumpstart">
                                    <p><b>Jumpstart: chương trình tiếng Anh khởi động dành cho các bé 3 - 6 tuổi</b></p>
                                    <p>• Trẻ được tiếp xúc với ngôn ngữ một cách tự nhiên nhất để chuẩn bị hành trang cho tương lai.</p>
                                    <p>• Môi trường học tương tác, hoạt động thú vị, đầy cảm hứng cùng sự hỗ trợ của thiết bị công nghệ hiện đại.</p>
                                    <p>• Phương pháp khuyến khích giao tiếp, tận dụng tối đa giờ học thông qua các hoạt động tràn ngập âm thanh và sự vui nhộn.</p>
                                    @if(Route::currentRouteName() == 'teacherday')
                                    <div class="button-wrapper" id="button-jumpstart">
                                        <button type="button" class="btn btn-register btn-scroll-product" data-scroll="#banner-section" data-value="14">Đăng ký tư vấn</button>
                                    </div>
                                    @endif
                                </div>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="each-propram">
                                <img src="{!! asset('public/assets/teacherday/imgs/sj.png') !!}" class="img-fluid" alt="">
                                <div class="control-wrapper">
                                    <p data-id="superjunior" class="program-trigger">SUPER JUNIORS</p>
                                </div>
                                <div class="reason-content" id="superjunior">
                                    <p><b>Super Juniors: chương trình tiếng Anh dành riêng cho học viên 6 - 11 tuổi.</b></p>
                                    <p>• Tập trung phát triển khả năng Anh ngữ ở cả bốn kỹ năng: Nghe, Nói, Đọc và Viết với sự hỗ trợ từ giáo trình học tiêu chuẩn quốc tế. </p>
                                    <p>• Phương pháp học tư duy, thực hiện dự án sẽ giúp học viên có trải nghiệm học tập tối ưu và phát triển kỹ năng toàn diện.</p>
                                    <p>• Môi trường lớp học tương tác khuyến khích học viên tham gia vào quá trình học thông qua các hoạt động “học mà chơi” thú vị.</p>
                                    @if(Route::currentRouteName() == 'teacherday')
                                    <div class="button-wrapper" id="button-superjunior">
                                        <button type="button" class="btn btn-register  btn-scroll-product" data-scroll="#banner-section" data-value="13"> Đăng ký tư vấn</button>
                                    </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="each-propram" >
                                <img src="{!! asset('public/assets/teacherday/imgs/sm.png') !!}" class="img-fluid" alt="">
                                <div class="control-wrapper">
                                    <p data-id="smartteens" class="program-trigger">SMART TEENS</p>
                                </div>
                                <div class="reason-content" id="smartteens">
                                    <p><b>Smart Teens: chương trình tiếng Anh tích hợp dành riêng cho học viên 11 -  16 tuổi.</b></p>
                                    <p>• Thiết kế đặc biệt cho lứa tuổi thanh thiếu niên nhằm trau dồi khả năng ngôn ngữ cùng những kỹ năng cần thiết để tương tác với thế giới hiện đại 4.0. </p>
                                    <p>• Phát triển 6 kỹ năng thông qua phương pháp học tư duy, thực hiện dự án: kỹ năng giao tiếp, hợp tác, sáng tạo, tư duy phản biện, kiến thức công nghệ, tự hoàn thiện bản thân. </p>
                                    <p>• Giáo trình học tiêu chuẩn quốc tế từ National Geographic giàu hình ảnh, video và những đề tài hiện đại phù hợp với độ tuổi học viên. </p>
                                    @if(Route::currentRouteName() == 'teacherday')
                                    <div class="button-wrapper" id="button-smartteens">
                                        <button type="button" class="btn btn-register btn-scroll-product" data-scroll="#banner-section" data-value="15">Đăng ký tư vấn</button>
                                    </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section trainghiem">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="each-trainghiem">
                            <div class="svg-wrapper">
                                <img class="img-fluid" src="{!! asset('public/assets/teacherday/imgs/teacherday/telesale01.jpg') !!}" />
                            </div>
                            <div class="trainghiem-content">
                                <h4 class="title-trainghiem">Khách Hàng <br/>Đăng Ký Thông Tin</h4>
                                <p>ILA sẽ chủ động liên hệ & tư vấn đến khách hàng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="each-trainghiem">
                            <div class="svg-wrapper">
                                <img src="{!! asset('public/assets/teacherday/imgs/teacherday/telesale02.jpg') !!}" />
                            </div>
                            <div class="trainghiem-content">
                                <h4 class="title-trainghiem">Khách Hàng <br/>GHÉ THĂM ILA</h4>
                                <p>Các chuyên viên của ILA sẽ tư vấn lộ trình học Tiếng Anh & 6 kỹ năng thế kỉ 21 phù hợp cho từng học viên, cũng như đưa bạn tham quan cơ sở vật chất tại trung tâm gần nhất.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="each-trainghiem">
                            <div class="svg-wrapper">
                                <img src="{!! asset('public/assets/teacherday/imgs/teacherday/telesale03.jpg') !!}" />
                            </div>
                            <div class="trainghiem-content">
                                <h4 class="title-trainghiem"> TRẢI NGHIỆM<br/> HỌC THỬ</h4>
                                <p>Mang đến cho học viên & phụ huynh trải nghiệm môi trường giáo dục tốt nhất qua các buổi học thử đạt chất lượng giảng dạy chuẩn quốc tế của ILA.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="each-trainghiem">
                            <div class="svg-wrapper">
                                <img src="{!! asset('public/assets/teacherday/imgs/teacherday/telesale04.jpg') !!}" />
                            </div>
                            <div class="trainghiem-content">
                                <h4 class="title-trainghiem">HỌC BỔNG<br/> HẤP DẪN</h4>
                                <p>Cơ hội nhận học bổng lên đến 30% dành cho học viên khi đăng ký khóa học mới*.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <section class="section moitruonghoc" id="moitruonghoc">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-wrapper">
                        <h2 class="title-section">MÔI TRƯỜNG HỌC TẠI ILA</h2>
                        <p class="sub-title">Chúng tôi luôn cố gắng kiến tạo để có môi trường giáo dục tốt nhất.</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="each-moitruonghoc" data-aos="fade-in">
                        <div class="img-wrapper">
                            <img src="{!! asset('public/assets/teacherday/imgs/moitruonghoc/h01.jpg') !!}" class="img-fluid" alt="">
                        </div>
                        <div class="head">
                            <h4>CÔNG NGHỆ BẬC NHẤT</h4>
                        </div>
                        <div class="moitruong-content">
                            <p>Công nghệ là một trong các yếu tố cốt lõi của ILA, nhằm phục vụ cho việc học của học viên được hiệu quả nhất.</p>
                        </div>
                        <!--//PRICE CONTENT END-->


                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="each-moitruonghoc" data-aos="fade-in" data-aos-delay="200">
                        <div class="img-wrapper">
                            <img src="{!! asset('public/assets/teacherday/imgs/moitruonghoc/h02.jpg') !!}" class="img-fluid" alt="">
                        </div>
                        <div class="head">
                            <h4>CƠ SỞ VẬT CHẤT HIỆN ĐẠI</h4>
                        </div>
                        <div class="moitruong-content">
                            <p>Phòng học được thiết kế phù hợp theo lứa tuổi học viên & chương trình học, đảm bảo an toàn & tăng tính tương tác cho từng giờ học.</p>
                        </div>
                        <!--//PRICE CONTENT END-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="each-moitruonghoc" data-aos="fade-in" data-aos-delay="300">
                        <div class="img-wrapper">
                            <img src="{!! asset('public/assets/teacherday/imgs/moitruonghoc/h03.jpg') !!}" class="img-fluid" alt="">
                        </div>
                        <div class="head">
                            <h4>THEO SÁT TIẾN TRÌNH HỌC</h4>
                        </div>
                        <div class="moitruong-content">
                            <p>Giáo viên & trợ giảng tại ILA luôn lắng nghe, theo sát từng học viên để đưa ra những tư vấn phù hợp nhất cho việc học.</p>
                        </div>
                        <!--//PRICE CONTENT END-->


                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="each-moitruonghoc" data-aos="fade-in" data-aos-delay="400">
                        <div class="img-wrapper">
                            <img src="{!! asset('public/assets/teacherday/imgs/moitruonghoc/h04.jpg') !!}" class="img-fluid" alt="">
                        </div>
                        <div class="head">
                            <h4>THỰC HÀNH NHIỀU HƠN</h4>
                        </div>
                        <div class="moitruong-content">
                            <p>Học viên được cung cấp tài khoản học trực tuyến trên máy tính, điện thoại, máy tính bảng, từ đó dễ dàng thực hành & cải thiện các kỹ năng Anh ngữ.</p>
                        </div>
                        <!--//PRICE CONTENT END-->


                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="img-wrapper-footer" >
                            <img src="{!! asset('public/assets/teacherday/imgs/teacherday/footer.jpg') !!}" class="img-fluid" alt="">
                            <div class="content-footer">
                                <div class="container-fuild">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p>Ghé thăm trang web <a href="https://ila.edu.vn" class="footer-link">www.ila.edu.vn</a> để cập nhật thông tin về các sự kiện, tin tức cùng những chương trình đào tạo Anh ngữ đúng chuẫn quốc tế.</p>
                                        </div>
                                        <div class="col-md-5 ">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="ic">
                                                        <span class="each-ic"><a href="https://facebook.com/ilavn" title="ILA Fanpage"><img src="{!! asset('public/assets/teacherday/imgs/ic-fb.png') !!}" class="img-fuild" alt=""></a></span>
                                                        <span class="each-ic"><a href="https://www.instagram.com/ilavietnam/" title="ILA Instagram"><img src="{!! asset('public/assets/teacherday/imgs/ic-ins.png') !!}" alt="img-fuild"></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="hotline">
                                                        <p>Hotline: <a href="tel:19006965" class="tel">1900 6965</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{!! asset('public/assets/teacherday/js/jquery.sticky.js') !!}"></script>

    @if(Route::currentRouteName() == 'teacherday')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    @endif
    @yield('script')
    
</body>
</html>