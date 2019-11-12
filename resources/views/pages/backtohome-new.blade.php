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
    <link rel="stylesheet" href="{!! asset('public/assets/backtohome/css/style.css') !!}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/assets/backtohome/js/checkbox/prettyCheckable.css')}}">

    <title>ILA - Back To Home 2019</title>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCBL792" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSRJ6HL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
                            <a data-scroll="#backtohome" href="#backtohome" class="btn-scroll">ILA - Back To "Home"</a>
                        </li>
                        <li>
                            <a data-scroll="#ngoinhaila" href="#ngoinhaila" class="btn-scroll">
                                “NGÔI NHÀ CHUNG” ILA</a>
                        </li>
                        <li class="register-tab">
                            <a class="btn-cta btn-scroll" data-scroll="#banner-section" href="#">Đăng Ký Tư Vấn</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </header>
        <!-- BANNER -->
        <section class="banner section" id="banner-section">
            <div class="banner">
                @if(!$mobile_detect->isMobile())
                <img src="{!! asset('public/assets/backtohome') !!}/imgs/banner.jpg" class="img-fluid" alt="ILA Back To Home">
                @else
                <img src="{!! asset('public/assets/backtohome') !!}/imgs/mobile-b2h-banner.jpg" class="img-fluid mb-image" alt="ILA Back To Home">
                @endif
            </div>
            <div class="form-section" id="form-wrapper" data-aos="fade-up">
                <div class="title-wrapper">
                    <p class="form-title text-center">ĐĂNG KÝ TƯ VẤN</p>
                    <p class="note">Cùng ILA trải nghiệm năm học mới thật tuyệt vời & nhận học bổng lên tới 30%!</p>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)
                        <p class="note">{!! $error !!}</p>
                        @endforeach
                    </div>
                @endif
                <form class="form" id="form-backtohome" action="{!! route('post.backtohome') !!}" method="POST">
                    {!! csrf_field(); !!}
                    @honeypot('honeypot_name', 'honeypot_time')
                    <div class="form-group">
                        <input type="text" class="form-control" name="parentname" placeholder="Tên Phụ Huynh (*)" value="{!! old('parentname') !!}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Số điện thoại liên lạc (*)" value="{!! old('phone') !!}">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email (*)" value="{!! old('email') !!}">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="center_id" id="center_selection">
                            <option value="">Vui lòng chọn trung tâm ILA (*)</option>
                            @if(!$cities->isEmpty())
                                @foreach($cities as $city)
                                <optgroup label="{!! $city->name !!}">
                                    @foreach($city->center as $center)
                                    <option value="{!! $center->id !!}">{!! $center->name_vi !!}</option>
                                    @endforeach
                                </optgroup>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="program_id" id="program_selection">
                            <option value="">Vui lòng chọn khóa học (*)</option>
                            @if(!$products->isEmpty())
                                @foreach($products as $product)
                                    $
                                    @php
                                        $name = '';
                                        switch ($product->id) {

                                            case 14 :
                                            $name = 'Jumpstart (Tiếng Anh Trẻ Em từ 3 - 6 tuổi)';
                                            break;

                                            case 13 :
                                            $name = 'Super Juniors (Tiếng Anh Thiếu Nhi từ 6 - 11 tuổi)';
                                            break;

                                            case 15 :
                                            $name = 'Smart Teens (Tiếng Anh Thiếu Niên từ 11 - 16 tuổi)';
                                            break;

                                            case 12 :
                                            $name = 'Global English (Tiếng Anh Giao Tiếp Quốc Tế)';
                                            break;

                                            case 21 :
                                            $name = 'Exam English (Tiếng Anh Luyện Thi)';
                                            break;

                                            case 52 :
                                            $name = 'ILA Maths (Chương trình Toán)';
                                            break;

                                            default :
                                            $name = 'Tiếng Anh ILA';
                                        }
                                    @endphp
                                <option value="{!! $product->id !!}">{!! $name !!}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group radio-custom">
                            <input id="yes" type="radio" name="study_ila" value="1" data-label="Đã là học viên ILA">
                            <input id="no" type="radio" name="study_ila" value="0" checked data-label="Chưa là học viên ILA">
                    </div>
                    <div class="form-button">
                        <input type="submit" name="btn-submit" class="btn-register" value="Đăng Ký Tư Vấn">
                    </div>
                </form>
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
                                <a href="#register" class="btn-scroll-product" data-scroll="#form-wrapper" data-value="14"><img src="{!! asset('public/assets/backtohome') !!}/imgs/js.png" class="img-fluid" alt=""></a>
                                <div class="control-wrapper">
                                    <a href="#register" class="btn-scroll-product" data-scroll="#form-wrapper" data-value="14"><p data-id="jumpstart" class="program-trigger">JUMPSTART</p></a>
                                </div>
                                <div class="reason-content" id="jumpstart">
                                    <p><b>Jumpstart: chương trình tiếng Anh khởi động dành cho các bé 3 - 6 tuổi</b></p>
                                    <p>• Trẻ được tiếp xúc với ngôn ngữ một cách tự nhiên nhất để chuẩn bị hành trang cho tương lai.</p>
                                    <p>• Môi trường học tương tác, hoạt động thú vị, đầy cảm hứng cùng sự hỗ trợ của thiết bị công nghệ hiện đại.</p>
                                    <p>• Phương pháp khuyến khích giao tiếp, tận dụng tối đa giờ học thông qua các hoạt động tràn ngập âm thanh và sự vui nhộn.</p>
                                    <div class="button-wrapper" id="button-jumpstart">
                                        <button type="button" class="btn btn-register btn-scroll-product" data-value="14" data-scroll="#form-wrapper">Đăng Ký Tư Vấn</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="each-propram">
                                <a href="#register" class="btn-scroll-product" data-scroll="#form-wrapper" data-value="13"><img src="{!! asset('public/assets/backtohome') !!}/imgs/sj.png" class="img-fluid" alt=""></a>
                                <div class="control-wrapper">
                                    <a href="#register" class="btn-scroll-product" data-scroll="#form-wrapper" data-value="13"><p data-id="superjunior" class="program-trigger">SUPER JUNIORS</p></a>
                                </div>
                                <div class="reason-content" id="superjunior">
                                    <p><b>Super Juniors: chương trình tiếng Anh dành riêng cho học viên 6 - 11 tuổi.</b></p>
                                    <p>• Tập trung phát triển khả năng Anh ngữ ở cả bốn kỹ năng: Nghe, Nói, Đọc và Viết với sự hỗ trợ từ giáo trình học tiêu chuẩn quốc tế. </p>
                                    <p>• Phương pháp học tư duy, thực hiện dự án sẽ giúp học viên có trải nghiệm học tập tối ưu và phát triển kỹ năng toàn diện.</p>
                                    <p>• Môi trường lớp học tương tác khuyến khích học viên tham gia vào quá trình học thông qua các hoạt động “học mà chơi” thú vị.</p>
                                    <div class="button-wrapper" id="button-superjunior">
                                        <button type="button" class="btn btn-register btn-scroll-product" data-value="13" data-scroll="#form-wrapper">Đăng Ký Tư Vấn</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="each-propram" >
                                <a href="#register" class="btn-scroll-product" data-scroll="#form-wrapper" data-value="15"> <img src="{!! asset('public/assets/backtohome') !!}/imgs/sm.png" class="img-fluid" alt=""></a>
                                <div class="control-wrapper">
                                    <a href="#register" class="btn-scroll-product" data-scroll="#form-wrapper" data-value="15"><p data-id="smartteens" class="program-trigger">SMART TEENS</p></a>
                                </div>
                                <div class="reason-content" id="smartteens">
                                    <p><b>Smart Teens: chương trình tiếng Anh tích hợp dành riêng cho học viên 11 -  16 tuổi.</b></p>
                                    <p>• Thiết kế đặc biệt cho lứa tuổi thanh thiếu niên nhằm trau dồi khả năng ngôn ngữ cùng những kỹ năng cần thiết để tương tác với thế giới hiện đại 4.0. </p>
                                    <p>• Phát triển 6 kỹ năng thông qua phương pháp học tư duy, thực hiện dự án: kỹ năng giao tiếp, hợp tác, sáng tạo, tư duy phản biện, kiến thức công nghệ, tự hoàn thiện bản thân. </p>
                                    <p>• Giáo trình học tiêu chuẩn quốc tế từ National Geographic giàu hình ảnh, video và những đề tài hiện đại phù hợp với độ tuổi học viên. </p>
                                    <div class="button-wrapper" id="button-smartteens">
                                        <button type="button" class="btn btn-register btn-scroll-product" data-value="15" data-scroll="#form-wrapper" >Đăng Ký Tư Vấn</button>
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
                            <a href="#register" class="btn-scroll" data-scroll="#form-wrapper" >
                                <img src="{!! asset('public/assets/backtohome') !!}/imgs/ic-folder/1.jpg" class="img-responsive" style="width:100%" alt="">
                            </a>
                            <div class="trainghiem-content">
                                <h4 class="title-trainghiem"><a href="#register" class="btn-scroll" data-scroll="#form-wrapper">Khách Hàng <br/>Đăng Ký Thông Tin</a></h4>
                                <p>ILA sẽ chủ động liên hệ & tư vấn đến khách hàng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="each-trainghiem">
                            <a href="#register" class="btn-scroll" data-scroll="#form-wrapper" >
                                <img src="{!! asset('public/assets/backtohome') !!}/imgs/ic-folder/2.jpg" class="img-responsive" style="width:100%" alt="">
                            </a>
                            <div class="trainghiem-content">
                                <h4 class="title-trainghiem"><a href="#register" class="btn-scroll" data-scroll="#form-wrapper">Khách Hàng <br/>GHÉ THĂM ILA</a></h4>
                                <p>Các chuyên viên của ILA sẽ tư vấn lộ trình học Tiếng Anh & 6 kỹ năng thế kỉ 21 phù hợp cho từng học viên, cũng như đưa bạn tham quan cơ sở vật chất tại trung tâm gần nhất.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="each-trainghiem">
                            <a href="#register" class="btn-scroll" data-scroll="#form-wrapper" >
                                <img src="{!! asset('public/assets/backtohome') !!}/imgs/ic-folder/3.jpg" class="img-responsive" style="width:100%" alt="">
                            </a>
                            
                            <div class="trainghiem-content">
                                <h4 class="title-trainghiem"><a href="#register" class="btn-scroll" data-scroll="#form-wrapper">TRẢI NGHIỆM<br/> HỌC THỬ</a></h4>
                                <p>Mang đến cho học viên & phụ huynh trải nghiệm môi trường giáo dục tốt nhất qua các buổi học thử đạt chất lượng giảng dạy chuẩn quốc tế của ILA.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="each-trainghiem">
                            <a href="#register" class="btn-scroll" data-scroll="#form-wrapper" >
                                <img src="{!! asset('public/assets/backtohome') !!}/imgs/ic-folder/4.jpg" class="img-responsive" style="width:100%" alt="">
                            </a>
                            <div class="trainghiem-content">
                                <h4 class="title-trainghiem"><a href="#register" class="btn-scroll" data-scroll="#form-wrapper">HỌC BỔNG<br/> HẤP DẪN</a></h4>
                                <p>Cơ hội nhận học bổng lên đến 30% dành cho học viên khi đăng ký khóa học mới*.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section xxf">
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
                                <img src="{!! asset('public/assets/backtohome') !!}/imgs/moitruonghoc/h01.jpg" class="img-fluid" alt="">
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
                                <img src="{!! asset('public/assets/backtohome') !!}/imgs/moitruonghoc/h02.jpg" class="img-fluid" alt="">
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
                                <img src="{!! asset('public/assets/backtohome') !!}/imgs/moitruonghoc/h03.jpg" class="img-fluid" alt="">
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
                                <img src="{!! asset('public/assets/backtohome') !!}/imgs/moitruonghoc/h04.jpg" class="img-fluid" alt="">
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
                                    <img src="{!! asset('public/assets/backtohome') !!}/imgs/reason-img01.png" class="img-fluid" alt="">

                                    <img src="{!! asset('public/assets/backtohome') !!}/imgs/reason-img02.jpg" class="img-fluid" alt="">
                                    <img src="{!! asset('public/assets/backtohome') !!}/imgs/reason-img03.jpg" class="img-fluid" alt="">
                                    <img src="{!! asset('public/assets/backtohome') !!}/imgs/reason-img04.jpg" class="img-fluid" alt="">
                                    <img src="{!! asset('public/assets/backtohome') !!}/imgs/reason-img05.jpg" class="img-fluid" alt="">
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
                            <div class="img-wrapper-footer" >
                                <img src="{!! asset('public/assets/backtohome') !!}/imgs/bg-footer.png" class="img-fluid" alt="">
                                <div class="content-footer">
                                    <div class="container-fuild">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Ghé thăm trang web <a href="https://ila.edu.vn" class="footer-link">www.ila.edu.vn</a> để cập nhật thông tin về các sự kiện, tin tức cùng những chương trình đào tạo Anh ngữ đúng chuẫn quốc tế.</p>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="ic">
                                                            <span class="each-ic"><a href="https://facebook.com/ilavn" title="ILA Fanpage"><img src="{!! asset('public/assets/backtohome') !!}/imgs/ic-fb.png" class="img-fuild" alt=""></a></span>
                                                            <span class="each-ic"><a href="https://www.instagram.com/ilavietnam/" title="ILA Instagram"><img src="{!! asset('public/assets/backtohome') !!}/imgs/ic-ins.png" alt="img-fuild"></a></span>
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
<script src="{{asset('public/assets/backtohome/js/checkbox/prettyCheckable.min.js')}}"></script>
    <script>
        $(document).ready(function(){
        		AOS.init({
	            	once: true
	            });

            $('#form-backtohome #center_selection').select2();

            var program_select =  $('#form-backtohome #program_selection').select2();


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

            $(".btn-scroll-product").on("click", function (e) {
                var $scrollEle = $(this).data("scroll");
                var value = $(this).data('value');
                if(value == 14 || value == 13 || value == 15){
                    program_select.val(value).trigger('change');
                }
                $('html, body').stop().animate({
                    scrollTop: $($scrollEle).offset().top - 80
                }, 1000);
                e.preventDefault();
            });

            $(".slick-img").slick({
                autoplay: true,
                arrows: false,
            });

            $('.radio-custom input#yes').prettyCheckable({
                customClass: 'd-block'
            });
            $('.radio-custom input#no').prettyCheckable({
                customClass: 'd-block'
            });


        })
    </script>
</body>
</html>