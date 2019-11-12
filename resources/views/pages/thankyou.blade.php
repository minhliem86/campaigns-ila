<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{!! asset('public/assets/backtohome/css/style.css') !!}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>ILA - Back To Home 2019</title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PCBL792');</script>
    <!-- End Google Tag Manager -->

        <!-- Google Tag Manager VBA -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSRJ6HL');</script>
<!-- End Google Tag Manager —>


<!-- Facebook Pixel Code ILA -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2507679082794201');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2507679082794201&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCBL792"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSRJ6HL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- ILA PIXEL CODE COMPLETE  -->
<script>
  fbq('track', 'Lead');
</script>
<!-- END PIXEL CODE -->
<div class="page">
    <header id="navbar-ila">
        <nav class="navbar navbar-expand-lg affix-top">
            <a class="logo" href="{!! url('back-to-home') !!}">
                <img src="{!! asset('public/assets/backtohome/imgs/logo.png') !!}" class="img-fluid" alt="ILA Back To Home">
            </a>
            <button type="button" class="navbar-toggler collapsed float-right" data-toggle="collapse" data-target="#navbar-backtohome" aria-expanded="false">
                <span class="navbar-toggle-icon"></span>
                <span class="navbar-toggle-icon"></span>
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-backtohome">
                <ul class="nav navbar-nav">
                    <li>
                        <a data-scroll="#backtohome" href="#backtohome" class="btn-scroll">ILA - Back To "Home"</a>
                    </li>
                    <li>
                        <a data-scroll="#ngoinhaila" href="#ngoinhaila" class="btn-scroll">
                            “NGÔI NHÀ CHUNG” ILA</a>
                    </li>
                    <li>
                        <a data-scroll="#chuongtrinhhoc" href="#chuongtrinhhoc" class="btn-scroll">Chương Trình Học</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </header>
    {{--BANNER--}}
    <section class="banner section">
        <div class="banner">
             @if(!$mobile_detect->isMobile())
                <img src="{!! asset('public/assets/backtohome/imgs/banner.jpg') !!}" class="img-fluid" alt="ILA Back To Home">
                @else
                <img src="{!! asset('public/assets/backtohome/imgs/mobile-b2h-banner.jpg') !!}" class="img-fluid" alt="ILA Back To Home">
                @endif
        </div>
        <div class="form-section thankyou-form" data-aos="fade-up">
            <p class="form-title text-center thankyou-text"><b>ĐĂNG KÝ THÀNH CÔNG.</b></p>
            <p class="form-title text-center thankyou-text">Cảm ơn bạn đã luôn đồng hành cùng ILA. </p>
            <p class="form-title text-center thankyou-text">Chúng tôi sẽ liên hệ với bạn trong <b>24H – 48H</b> tiếp theo.</p>

        </div>
    </section>

    <!--CHUONG TRINH HOC-->
    <section class="chuongtrinhhoc-section" id="chuongtrinhhoc">
        <div class="chuongtrinhhoc-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="title-wrapper">
                            <h2 class="title-chuongtrinhhoc text-center">Chương trình học</h2>
                            <p class="head-line">Đội ngũ giáo viên tại ILA với <b>100% giáo viên trình độ bản ngữ</b> đã có bằng cử nhân hoặc thạc sĩ & bằng cấp giảng dạy Anh ngữ được chứng nhận quốc tế. Không chỉ hiểu được nhu cầu của các học viên, các giáo viên còn hết mình giúp đỡ từng học viên đạt được mục tiêu học tập của mình.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="each-propram" >
                            <img src="{!! asset('public/assets/backtohome/imgs/js.png') !!}" class="img-fluid" alt="">
                            <div class="control-wrapper">
                                <p data-id="jumpstart" class="program-trigger">JUMPSTART</p>
                            </div>
                            <div class="reason-content" id="jumpstart">
                                <p><b>Jumpstart: chương trình tiếng Anh khởi động dành cho các bé 3 - 6 tuổi</b></p>
                                <p>• Trẻ được tiếp xúc với ngôn ngữ một cách tự nhiên nhất để chuẩn bị hành trang cho tương lai.</p>
                                <p>• Môi trường học tương tác, hoạt động thú vị, đầy cảm hứng cùng sự hỗ trợ của thiết bị công nghệ hiện đại.</p>
                                <p>• Phương pháp khuyến khích giao tiếp, tận dụng tối đa giờ học thông qua các hoạt động tràn ngập âm thanh và sự vui nhộn.</p>
                                <div class="button-wrapper" id="button-jumpstart">
                                    <button type="button" class="btn btn-register btn-scroll" data-scroll="#banner-section">Đăng Ký Tư Vấn</button>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="each-propram">
                            <img src="{!! asset('public/assets/backtohome/imgs/sj.png') !!}" class="img-fluid" alt="">
                            <div class="control-wrapper">
                                <p data-id="superjunior" class="program-trigger">SUPER JUNIORS</p>
                            </div>
                            <div class="reason-content" id="superjunior">
                                <p><b>Super Juniors: chương trình tiếng Anh dành riêng cho học viên 6 - 11 tuổi.</b></p>
                                <p>• Tập trung phát triển khả năng Anh ngữ ở cả bốn kỹ năng: Nghe, Nói, Đọc và Viết với sự hỗ trợ từ giáo trình học tiêu chuẩn quốc tế. </p>
                                <p>• Phương pháp học tư duy, thực hiện dự án sẽ giúp học viên có trải nghiệm học tập tối ưu và phát triển kỹ năng toàn diện.</p>
                                <p>• Môi trường lớp học tương tác khuyến khích học viên tham gia vào quá trình học thông qua các hoạt động “học mà chơi” thú vị.</p>
                                <div class="button-wrapper" id="button-superjunior">
                                    <button type="button" class="btn btn-register btn-scroll" data-scroll="#banner-section">Đăng Ký Tư Vấn</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="each-propram" >
                            <img src="{!! asset('public/assets/backtohome/imgs/sm.png') !!}" class="img-fluid" alt="">
                            <div class="control-wrapper">
                                <p data-id="smartteens" class="program-trigger">SMART TEENS</p>
                            </div>
                            <div class="reason-content" id="smartteens">
                                <p><b>Smart Teens: chương trình tiếng Anh tích hợp dành riêng cho học viên 11 -  16 tuổi.</b></p>
                                <p>• Thiết kế đặc biệt cho lứa tuổi thanh thiếu niên nhằm trau dồi khả năng ngôn ngữ cùng những kỹ năng cần thiết để tương tác với thế giới hiện đại 4.0. </p>
                                <p>• Phát triển 6 kỹ năng thông qua phương pháp học tư duy, thực hiện dự án: kỹ năng giao tiếp, hợp tác, sáng tạo, tư duy phản biện, kiến thức công nghệ, tự hoàn thiện bản thân. </p>
                                <p>• Giáo trình học tiêu chuẩn quốc tế từ National Geographic giàu hình ảnh, video và những đề tài hiện đại phù hợp với độ tuổi học viên. </p>
                                <div class="button-wrapper" id="button-smartteens">
                                    <button type="button" class="btn btn-register btn-scroll" data-scroll="#banner-section" >Đăng Ký Tư Vấn</button>
                                </div>
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
                            <a href="#register" class="btn-scroll"data-scroll="#banner-section" >
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 64 65" style="enable-background:new 0 0 64 65;" xml:space="preserve" class="svg-img">
                                    <style type="text/css">
                                        .st0{fill:#1A4788;}
                                    </style>
                                    <g id="D_-_11_x2C__Agreement_x2C__report_x2C__form_x2C__layout_x2C__paper">
                                        <g>
                                            <path class="st0" d="M53.5,30.7C53.5,30.7,53.5,30.7,53.5,30.7L38.7,49.2l-2.4,8.4l7.1-4.8l8.9-12.5c0,0,0,0,0,0l3-4.3
                                                c0,0,0,0,0,0l4.2-5.7L56,27.5L53.5,30.7z"/>
                                            <path class="st0" d="M0.3,60.9C0.3,62,1.2,63,2.3,63c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0
                                                c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0.1,0
                                                c0,0,0.1,0,0.1-0.1c0,0,0,0,0.1-0.1c0,0,0.1,0,0.1-0.1c0,0,0,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0.1-0.1c0,0,0.1-0.1,0.1-0.1
                                                c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1c0,0,0,0,0-0.1c0,0,0-0.1,0.1-0.1
                                                c0,0,0,0,0,0c0-0.1,0-0.1,0.1-0.2c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1l0,0c0,0,0-0.1,0-0.1V9.4H0
                                                L0.3,60.9z"/>
                                            <polygon class="st0" points="44.7,2.8 44.7,7.9 50.8,7.9 		"/>
                                            <path class="st0" d="M44.4,53.9l-8.9,6c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0
                                                c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0
                                                c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0
                                                c0,0-4.1-2.8-6.7-1.5c-0.7,0.3-1.5,0.5-2.4,0.5c-3.2,0-7-1.9-7.2-2c-0.4-0.2-0.5-0.6-0.3-1c0.2-0.4,0.6-0.5,1-0.3
                                                c1.6,0.8,6.1,2.6,8.3,1.5c2.5-1.3,5.8,0.2,7.3,1.1l2.7-9.5c0-0.1,0-0.1,0.1-0.2c0,0,0-0.1,0.1-0.1L52.1,30V9.4h-8.2
                                                c-0.4,0-0.7-0.3-0.7-0.7V2H6v6.7v52.1c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0,0.1,0,0.2,0,0.2c0,0,0,0,0,0
                                                c0,0.1,0,0.2,0,0.2c0,0,0,0,0,0c0,0.1,0,0.1-0.1,0.2c0,0,0,0,0,0c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0,0,0c0,0.1-0.1,0.1-0.1,0.2
                                                c0,0,0,0,0,0c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0,0,0c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0,0,0c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0,0,0h47V43
                                                l-7.6,10.7C44.5,53.8,44.4,53.9,44.4,53.9z M29,5.7h3v3h-3L29,5.7L29,5.7z M23.1,5.7h3v3h-3V5.7z M17.1,5.7h3v3h-3V5.7z M11.2,5.7
                                                h3v3h-3V5.7z M11.2,12.4h28.3c0.4,0,0.7,0.3,0.7,0.7c0,0.4-0.3,0.7-0.7,0.7H11.2c-0.4,0-0.7-0.3-0.7-0.7
                                                C10.4,12.7,10.8,12.4,11.2,12.4z M11.2,16.9h32.8c0.4,0,0.7,0.3,0.7,0.7s-0.3,0.7-0.7,0.7H11.2c-0.4,0-0.7-0.3-0.7-0.7
                                                C10.4,17.2,10.8,16.9,11.2,16.9z M11.2,21.3h25.3c0.4,0,0.7,0.3,0.7,0.7c0,0.4-0.3,0.7-0.7,0.7H11.2c-0.4,0-0.7-0.3-0.7-0.7
                                                C10.4,21.7,10.8,21.3,11.2,21.3z M11.2,25.8h22.3c0.4,0,0.7,0.3,0.7,0.7c0,0.4-0.3,0.7-0.7,0.7H11.2c-0.4,0-0.7-0.3-0.7-0.7
                                                C10.4,26.1,10.8,25.8,11.2,25.8z M11.2,30.3H29c0.4,0,0.7,0.3,0.7,0.7c0,0.4-0.3,0.7-0.7,0.7H11.2c-0.4,0-0.7-0.3-0.7-0.7
                                                C10.4,30.6,10.8,30.3,11.2,30.3z M11.2,34.7h25.3c0.4,0,0.7,0.3,0.7,0.7s-0.3,0.7-0.7,0.7H11.2c-0.4,0-0.7-0.3-0.7-0.7
                                                S10.8,34.7,11.2,34.7z M10.4,39.9c0-0.4,0.3-0.7,0.7-0.7h25.3c0.4,0,0.7,0.3,0.7,0.7c0,0.4-0.3,0.7-0.7,0.7H11.2
                                                C10.8,40.7,10.4,40.4,10.4,39.9z"/>
                                            <polygon class="st0" points="60.4,21.6 56.9,26.4 58.3,27.4 60.4,29 64,24.3 		"/>
                                        </g>
                                    </g>
                                    <g id="Layer_1_1_">
                                    </g>
                                    </svg>
                            </a>
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
                            <a href="#register" class="btn-scroll"data-scroll="#banner-section">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 49.8 65" style="enable-background:new 0 0 49.8 65;" xml:space="preserve" class="svg-img">
                                    <style type="text/css">
                                        .st0{fill:#1A4788;}
                                    </style>
                                    <title></title>
                                    <g id="_1">
                                        <path class="st0" d="M24.9,48.4c-4.4,0-8.7-2.9-12.1-8.1c-2.8-4.3-4.5-9.8-4.5-14.1c0-9.2,7.4-16.6,16.6-16.6s16.6,7.4,16.6,16.6
                                            c0,4.4-1.7,9.8-4.5,14.1C33.6,45.6,29.3,48.4,24.9,48.4z M24.9,14.5c-6.5,0-11.7,5.3-11.7,11.7c0,3.5,1.5,8,3.8,11.5
                                            c2.4,3.7,5.3,5.8,8,5.8s5.6-2.1,8-5.8c2.3-3.5,3.8-8.1,3.8-11.5C36.6,19.7,31.4,14.5,24.9,14.5L24.9,14.5z"/>
                                        <path class="st0" d="M10.7,36.7C4.9,36.8,0.2,32.2,0.1,26.4s4.6-10.6,10.4-10.6c0.1,0,0.2,0,0.3,0c1,0,2,0.1,3,0.4
                                            c1.3,0.4,2,1.7,1.7,3c-0.4,1.3-1.7,2-3,1.7c0,0,0,0,0,0c-0.5-0.2-1.1-0.2-1.6-0.2C7.6,20.5,5,23,5,26.1c-0.1,3.1,2.4,5.7,5.5,5.7
                                            c0.1,0,0.1,0,0.2,0c0.4,0,0.8,0,1.2-0.1c1.3-0.3,2.6,0.6,2.9,1.9c0.3,1.3-0.6,2.6-1.9,2.9C12.2,36.6,11.5,36.7,10.7,36.7z"/>
                                        <path class="st0" d="M47.1,29.7c-1.3,0-2.4-1.1-2.4-2.4l0,0c0-12.4-8.9-22.4-19.8-22.4S5.1,14.9,5.1,27.3c0,1.3-1.1,2.4-2.4,2.4
                                            s-2.4-1.1-2.4-2.4C0.2,12.2,11.3,0,24.9,0s24.7,12.2,24.7,27.3C49.6,28.6,48.5,29.7,47.1,29.7z"/>
                                        <path class="st0" d="M39.1,36.7c-0.6,0-1.3-0.1-1.9-0.2h-8.3c-1.3,0-2.4-1.1-2.4-2.4s1.1-2.4,2.4-2.4h8.5c0.2,0,0.3,0,0.5,0.1
                                            c0.4,0.1,0.8,0.1,1.1,0.1c3.1,0.1,5.7-2.4,5.7-5.5c0.1-3.1-2.4-5.7-5.5-5.7c-0.1,0-0.1,0-0.2,0c-0.5,0-1.1,0.1-1.6,0.2
                                            c-1.3,0.4-2.6-0.4-3-1.7c-0.4-1.3,0.4-2.6,1.7-3c1-0.3,2-0.4,3-0.4c5.8-0.1,10.6,4.6,10.6,10.4c0.1,5.8-4.6,10.6-10.4,10.6
                                            C39.2,36.7,39.1,36.7,39.1,36.7z"/>
                                        <path class="st0" d="M46.6,65H3.2c-1.2,0-2.2-0.9-2.4-2.1l-0.7-5.2c-0.6-4.8,1.9-9.4,6.2-11.5l10.9-5.3c1.2-0.6,2.7-0.1,3.3,1.1
                                            c0.6,1.2,0.1,2.7-1.1,3.3c0,0-0.1,0-0.1,0L8.4,50.5C6,51.7,4.6,54.3,4.9,57l0.4,3.1h39.2l0.4-3.1c0.4-2.7-1.1-5.3-3.5-6.5
                                            l-10.9-5.3c-1.2-0.5-1.8-1.9-1.3-3.2c0.5-1.2,1.9-1.8,3.2-1.3c0.1,0,0.1,0.1,0.2,0.1l10.9,5.3c4.3,2.1,6.8,6.7,6.2,11.5L49,62.9
                                            C48.9,64.1,47.8,65,46.6,65z"/>
                                    </g>
                                    </svg>
                            </a>
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
                            <a href="#register" class="btn-scroll"data-scroll="#banner-section" >
                                <svg version="1.1" id="Icons_Teacher" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                     y="0px" viewBox="0 0 64 65" style="enable-background:new 0 0 64 65;" xml:space="preserve" class="svg-img">
                                    <style type="text/css">
                                        .st0{fill:#1A4788;}
                                    </style>
                                    <g>
                                        <path class="st0" d="M61.1,11.3H14.3c-1.6,0-2.9,1.3-2.9,2.9v10.6c0.8-0.2,1.8-0.4,2.6-0.4c0.6,0,1.2,0.1,1.8,0.1v-8.9h43.8v27.8
                                            H34.8l-4.2,4.4h30.4c1.6,0,2.9-1.3,2.9-2.9V14.2C64,12.6,62.7,11.3,61.1,11.3"/>
                                        <path class="st0" d="M14.1,39.8c3.4,0,6.2-2.8,6.2-6.2s-2.8-6.2-6.2-6.2s-6.2,2.8-6.2,6.2C7.8,37,10.7,39.8,14.1,39.8"/>
                                        <path class="st0" d="M38,32.6c-0.9-1.5-2.8-1.8-4.3-0.9c-0.3,0.1-0.4,0.4-0.6,0.6L22.4,43.3c-1-0.5-2.1-0.9-3.2-1.3
                                            c-1.7-0.3-3.4-0.7-5.1-0.7s-3.4,0.3-5.1,0.8c-2.5,0.7-4.7,1.9-6.5,3.4C2,46,1.7,46.7,1.5,47.3L0,53.7h21.8v-0.1l6.2-7.2l9.6-10.1
                                            C38.5,35.4,38.8,33.7,38,32.6"/>
                                    </g>
                                </svg>
                            </a>
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
                            <a href="#register" class="btn-scroll"data-scroll="#banner-section" >
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 64 65" style="enable-background:new 0 0 64 65;" xml:space="preserve" class="svg-img">
                                        <style type="text/css">
                                            .st0{fill:#1A4788;}
                                        </style>
                                    <g>
                                        <path class="st0" d="M12.9,16.8h23c0.5,0,0.9-0.4,0.9-0.9s-0.4-0.9-0.9-0.9h-23c-0.5,0-0.9,0.4-0.9,0.9
                                                C11.9,16.4,12.3,16.8,12.9,16.8z"/>
                                        <path class="st0" d="M8.8,23.4h31c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9h-31c-0.5,0-0.9,0.4-0.9,0.9
                                                C7.9,22.9,8.3,23.4,8.8,23.4z"/>
                                        <path class="st0" d="M40.8,28.2c0-0.5-0.4-0.9-0.9-0.9h-31c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9h31
                                                C40.4,29.1,40.8,28.7,40.8,28.2z"/>
                                        <path class="st0" d="M35.9,34.6l-4.5-1.7c-0.2-0.1-0.5-0.1-0.7,0l-4.1,1.6l-4.1-1.6c-0.2-0.1-0.5-0.1-0.7,0l-4.1,1.6l-4.1-1.6
                                                c-0.5-0.2-1,0.1-1.2,0.5c-0.2,0.5,0.1,1,0.5,1.2l4.5,1.7c0.2,0.1,0.5,0.1,0.7,0l4.1-1.6l4.1,1.6c0.2,0.1,0.5,0.1,0.7,0l4.1-1.6
                                                l4.1,1.6c0.1,0,0.2,0.1,0.3,0.1c0.4,0,0.7-0.2,0.9-0.6C36.6,35.3,36.3,34.8,35.9,34.6z"/>
                                        <path class="st0" d="M56.6,43.1c0.1-0.6,0.2-1.3,0.2-1.9c0-3.2-1.8-6.3-4.6-7.9V8.5c0-0.5-0.4-0.9-0.9-0.9H0.9C0.4,7.6,0,8,0,8.5
                                                v32.7c0,0.5,0.4,0.9,0.9,0.9h37.9c0,0.3,0.1,0.6,0.1,1l-7.1,7.1c-0.3,0.3-0.3,0.6-0.2,1c0.1,0.3,0.4,0.6,0.8,0.6l4.4,0.4l0.4,4.4
                                                c0,0.4,0.3,0.7,0.6,0.8c0.1,0,0.2,0.1,0.3,0.1c0.2,0,0.5-0.1,0.7-0.3l7.1-7.1c0.6,0.1,1.3,0.2,1.9,0.2c0.6,0,1.3-0.1,1.9-0.2
                                                l7.1,7.1c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.2,0,0.3-0.1c0.3-0.1,0.6-0.4,0.6-0.8l0.4-4.4l4.4-0.4c0.4,0,0.7-0.3,0.8-0.6
                                                c0.1-0.3,0-0.7-0.2-1L56.6,43.1z M1.9,9.4h48.5v23.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c-0.1,0-0.3-0.1-0.4-0.1c0,0-0.1,0-0.1,0
                                                c-0.1,0-0.3-0.1-0.4-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.3,0-0.4-0.1c0,0,0,0-0.1,0c-0.1,0-0.3,0-0.5,0c0,0-0.1,0-0.1,0
                                                c-0.1,0-0.3,0-0.5,0c-0.1,0-0.3,0-0.5,0c-0.1,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.3,0
                                                c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.2,0.1c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.2,0-0.2,0.1
                                                c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1
                                                c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1
                                                c-0.1,0-0.1,0.1-0.1,0.1c-0.1,0-0.1,0.1-0.2,0.1c-0.1,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.1-0.2,0.2c0,0-0.1,0.1-0.1,0.1
                                                c-0.1,0.1-0.2,0.1-0.3,0.2c0,0-0.1,0-0.1,0.1c-0.1,0.1-0.2,0.2-0.3,0.3l0,0c-0.1,0.1-0.2,0.2-0.3,0.3c0,0-0.1,0.1-0.1,0.1
                                                c-0.1,0.1-0.1,0.1-0.2,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.1-0.2,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.1-0.2,0.2
                                                c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.1c0,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2
                                                c0,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2
                                                c0,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.2-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1-0.1,0.2-0.1,0.2c0,0.1,0,0.1-0.1,0.2
                                                c0,0.1-0.1,0.2-0.1,0.3c0,0.1,0,0.1,0,0.2c0,0.1,0,0.2-0.1,0.3c0,0.1,0,0.1,0,0.1c0,0.1,0,0.2-0.1,0.3c0,0,0,0.1,0,0.1
                                                c0,0.1,0,0.3-0.1,0.4H1.9V9.4z M38.9,54.4l-0.3-3.2c0-0.5-0.4-0.8-0.9-0.9l-3.2-0.3l5-5c0,0,0,0,0,0.1c0,0.1,0.1,0.2,0.1,0.2
                                                c0,0,0,0.1,0.1,0.1c0.1,0.1,0.1,0.2,0.1,0.3c0,0,0,0,0,0c0.1,0.1,0.1,0.2,0.2,0.3c0,0,0,0.1,0.1,0.1c0.1,0.1,0.1,0.1,0.1,0.2
                                                c0,0,0,0.1,0.1,0.1c0.1,0.1,0.1,0.2,0.2,0.3l0,0c0.1,0.1,0.1,0.2,0.2,0.3c0,0,0,0.1,0.1,0.1c0.1,0.1,0.1,0.1,0.2,0.2
                                                c0,0,0,0.1,0.1,0.1c0.2,0.2,0.3,0.3,0.5,0.5c0,0,0.1,0,0.1,0.1c0.1,0.1,0.1,0.1,0.2,0.2c0,0,0.1,0,0.1,0.1c0.1,0.1,0.2,0.1,0.3,0.2
                                                c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.3,0.2c0,0,0.1,0,0.1,0.1c0.1,0.1,0.1,0.1,0.2,0.1c0,0,0.1,0,0.1,0.1c0.1,0.1,0.2,0.1,0.3,0.2
                                                c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0.1c0.1,0,0.2,0.1,0.2,0.1c0,0,0,0,0.1,0L38.9,54.4z M45.8,48.1
                                                c-0.6-0.2-1.2-0.4-1.7-0.7c-0.2-0.1-0.3-0.2-0.5-0.3c-0.1-0.1-0.3-0.2-0.4-0.3c-0.2-0.1-0.4-0.3-0.5-0.5c-0.9-0.9-1.5-1.9-1.8-3.1
                                                c-0.2-0.6-0.3-1.3-0.3-1.9c0-3.9,3.2-7.2,7.2-7.2c0.1,0,0.3,0,0.4,0c0.2,0,0.3,0,0.5,0c0.8,0.1,1.5,0.3,2.3,0.7
                                                c2.5,1.2,4,3.7,4,6.5c0,0.7-0.1,1.3-0.3,1.9c0,0.1-0.1,0.3-0.1,0.4c-0.1,0.3-0.2,0.6-0.4,0.9c-0.1,0.1-0.1,0.3-0.2,0.4
                                                c-0.3,0.5-0.7,1-1.1,1.4c-0.9,0.9-1.9,1.5-3.1,1.8C48.5,48.5,47.1,48.5,45.8,48.1z M57.8,50.4c-0.5,0-0.8,0.4-0.9,0.9l-0.3,3.2
                                                l-5-5c0,0,0,0,0.1,0c0.1,0,0.2-0.1,0.2-0.1c0,0,0.1,0,0.1-0.1c0.1-0.1,0.2-0.1,0.3-0.1c0,0,0,0,0,0c0.1-0.1,0.2-0.1,0.3-0.2
                                                c0,0,0.1,0,0.1-0.1c0.1-0.1,0.1-0.1,0.2-0.1c0,0,0.1,0,0.1-0.1c0.1-0.1,0.2-0.1,0.3-0.2l0,0c0.1-0.1,0.2-0.1,0.3-0.2
                                                c0,0,0.1,0,0.1-0.1c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0.1,0,0.1-0.1c0.1-0.1,0.2-0.2,0.3-0.2l0,0c0.1-0.1,0.2-0.2,0.2-0.3
                                                c0,0,0-0.1,0.1-0.1c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0-0.1,0.1-0.1c0.1-0.1,0.1-0.2,0.2-0.3c0,0,0,0,0,0c0.1-0.1,0.1-0.2,0.2-0.3
                                                c0,0,0-0.1,0.1-0.1c0.1-0.1,0.1-0.1,0.1-0.2c0,0,0-0.1,0.1-0.1c0.1-0.1,0.1-0.2,0.2-0.3c0,0,0,0,0-0.1c0.1-0.1,0.1-0.2,0.1-0.3
                                                c0,0,0-0.1,0.1-0.1c0-0.1,0.1-0.1,0.1-0.2c0,0,0,0,0-0.1l5,5L57.8,50.4z"/>
                                        <path class="st0" d="M50.8,42.7c0-1.2-0.7-1.9-2.4-2.3v-2.2c0.4,0.1,0.8,0.3,1.2,0.5c0.1,0.1,0.2,0.1,0.3,0.1
                                                c0.3,0,0.6-0.3,0.6-0.6c0-0.3-0.2-0.4-0.3-0.5c-0.5-0.3-1.1-0.5-1.7-0.6v-0.3c0-0.3-0.2-0.5-0.5-0.5c-0.3,0-0.5,0.2-0.5,0.5v0.2
                                                C46,37.2,45,38,45,39.2c0,1.3,0.8,1.9,2.4,2.3v2.2c-0.6-0.1-1.1-0.4-1.7-0.7c-0.1-0.1-0.2-0.1-0.4-0.1c-0.3,0-0.6,0.3-0.6,0.6
                                                c0,0.2,0.1,0.4,0.3,0.5c0.7,0.5,1.5,0.8,2.3,0.9v0.7c0,0.3,0.2,0.5,0.5,0.5c0.3,0,0.5-0.2,0.5-0.5v-0.7
                                                C49.8,44.8,50.8,44,50.8,42.7z M47.4,40.2c-0.9-0.3-1.1-0.6-1.1-1c0-0.5,0.4-0.9,1.1-0.9V40.2z M48.3,43.8v-2
                                                c0.9,0.3,1.1,0.6,1.1,1.1C49.4,43.4,49,43.7,48.3,43.8z"/>
                                    </g>
                                        </svg>
                            </a>
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

    <section class="section moitruonghoc">
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
                            <img src="{!! asset('public/assets/backtohome/imgs/moitruonghoc/h01.jpg') !!}" class="img-fluid" alt="">
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
                            <img src="{!! asset('public/assets/backtohome/imgs/moitruonghoc/h02.jpg') !!}" class="img-fluid" alt="">
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
                            <img src="{!! asset('public/assets/backtohome/imgs/moitruonghoc/h03.jpg') !!}" class="img-fluid" alt="">
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
                            <img src="{!! asset('public/assets/backtohome/imgs/moitruonghoc/h04.jpg') !!}" class="img-fluid" alt="">
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

    <section class="short-desc-section" data-aos="fade-up" id="backtohome">
        <div class="content-wrapper" >
            <h1 class="title-section">BACK TO “HOME” - ĐẾN ILA NHƯ TRỞ VỀ NHÀ </h1>
            <p class="content text-center">Sau một mùa hè, điều ba mẹ luôn quan tâm và mong muốn cho con là có thật nhiều động lực để khởi đầu năm học mới và duy trì việc học tập hiệu quả, thì với ILA còn là làm sao để tiếp tục tạo ra môi trường giáo dục tốt hơn nữa giúp các con hoàn thiện bản thân cả về kiến thức, kỹ năng, nhân cách và tự tin hội nhập. </p>
            <p class="content">Đó là lý do, để năm học sắp tới không chỉ thực sự đáng giá về mặt giáo dục, kỹ năng mà còn đáp ứng được mong đợi từ phụ huynh, học sinh và xã hội, ILA mang đến chương trình tựu trường mang tên
                <br>"Back To “HOME" - “Đến ILA như trở về NHÀ”.</p>

            <p class="content"><b>CÙNG TRỞ VỀ “NHÀ” VỚI ILA!</b></p>
            <div class="button-wrapper">
                <button type="button" data-scroll="#banner-section" class="btn-register btn-scroll">Đăng Ký Ngay</button>
            </div>
        </div>
    </section>

    <div class="reason-section" id="ngoinhaila">
        <div class="reason-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h2 class="title-section reason" data-aos="fade-up">
                            CÙNG TRẢI NGHIỆM<br/>
                            “NGÔI NHÀ CHUNG” ILA
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block d-xl-block">
                        <div class="wrapper-img" data-aos="fade-right">

                            <div class="slick-img">
                                <img src="{!! asset('public/assets/backtohome/imgs/reason-img01.png') !!}" class="img-fluid" alt="">

                                <img src="{!! asset('public/assets/backtohome/imgs/reason-img02.jpg') !!}" class="img-fluid" alt="">
                                <img src="{!! asset('public/assets/backtohome/imgs/reason-img03.jpg') !!}" class="img-fluid" alt="">
                                <img src="{!! asset('public/assets/backtohome/imgs/reason-img04.jpg') !!}" class="img-fluid" alt="">
                                <img src="{!! asset('public/assets/backtohome/imgs/reason-img05.jpg') !!}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="reason-content-wrapper" data-aos="fade-up">
                            <ul class="list-reason">
                                <li ><b>Ngôi nhà của sự tin cậy:</b> đội ngũ 100% giáo viên nói tiếng Anh bản ngữ có bằng cấp chuyên môn, giàu kinh nghiệm, đảm bảo quá trình tiếp thu và phát triển tốt nhất cho từng học viên.
                                </li >
                                <li ><b>Ngôi nhà của sự yêu thương:</b> đội ngũ trợ giảng chuyên nghiệp, tận tình và yêu trẻ, là những người bạn thân thiết, đồng hành cùng phụ huynh và hỗ trợ tối đa để mỗi học sinh có trải nghiệm học tập tốt nhất. </li>
                                <li><b>Ngôi nhà của sự kết nối:</b> đội ngũ Chuyên viên Hoạch định Giáo dục (EPs) hỗ trợ xây dựng lộ trình phát triển tiếng Anh, kỹ năng toàn diện, lâu dài; hệ thống quản lý trực tuyến (sổ liên lạc ILA Parents, nền tảng học tập MyELT…) giúp ba mẹ dễ dàng theo dõi và cập nhật sự tiến bộ của con mỗi ngày. </li>
                                <li><b>Ngôi nhà của sự chia sẻ:</b> những người bạn cùng học, cùng chơi, sẵn sàng chia sẻ, trải nghiệm cùng con các hoạt động cộng đồng, ngoại khóa và giúp đỡ nhau trên hành trình khôn lớn từng ngày.  </li>
                                <li><b>Ngôi nhà của sự trưởng thành:</b> Không chỉ hoàn thiện kỹ năng thế kỷ 21 (làm việc nhóm, giao tiếp, sáng tạo, tư duy phản biện, kiến thức công nghệ và khả năng hoàn thiện bản thân), rèn luyện tư duy “nhìn xa, nghĩ lớn” toàn cầu, ILA còn tiếp thêm động lực đến lớp, nơi gắn kết và cho con phát huy trọn vẹn năng lực cá nhân, được tôn trọng, dẫn dắt và yêu thương như một thành viên trong gia đình.</li>
                                <li class="last-item">Mời ba mẹ và các con cùng trải nghiệm năm học mới không thể tuyệt vời hơn với ưu đãi lên đến... cho học viên đăng ký khóa học mới trước ngày... !</li>
                                <li class="button-wrapper">
                                    <button type="button" data-scroll="#banner-section" class="btn-register btn-scroll">Trải Nghiệm Ngay</button>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="img-wrapper-footer">
                            <img src="{!! asset('public/assets/backtohome/imgs/bg-footer.png') !!}" class="img-fluid" alt="">
                            <div class="content-footer">
                                <div class="container-fuild">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Ghé thăm trang web <a href="https://ila.edu.vn" class="footer-link">www.ila.edu.vn</a> để cập nhật thông tin về các sự kiện, tin tức cùng những chương trình đào tạo Anh ngữ đúng chuẫn quốc tế.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ic">
                                                <span class="each-ic"><a href="https://facebook.com/ilavn" title="ILA Fanpage"><img src="{!! asset('public/assets/backtohome/imgs/ic-fb.png') !!}" class="img-fuild" alt=""></a></span>
                                                <span class="each-ic"><a href="https://www.instagram.com/ilavietnam/" title="ILA Instagram"><img src="{!! asset('public/assets/backtohome/imgs/ic-ins.png') !!}" alt="img-fuild"></a></span>
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

</div>



<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
        <script type="text/javascript">
            var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow2-1.png" />',controlattrs:{offsetx:5,offsety:100},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
        <noscript>Not seeing a <a href="https://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script src="{!! asset('public/assets/backtohome/js/jquery.sticky.js') !!}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        AOS.init();

        var $stickyBar = $("#navbar-ila").sticky({
            zIndex: 200
        });

        $(".btn-scroll").on("click", function (e) {
            var $scrollEle = $(this).data("scroll");
            $('html, body').stop().animate({
                scrollTop: $($scrollEle).offset().top - 100
            }, 1000);
            e.preventDefault();
        });

        $(".slick-img").slick({
            autoplay: true,
            arrows: false,
        });


    })
</script>
</body>
</html>