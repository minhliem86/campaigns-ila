@extends('layouts.layout-teacherday')

@section('tracking')

@stop

@section('content')
<div class="form-section" id="form-wrapper" data-aos="fade-up">
        <div class="title-wrapper">
            <p class="form-title text-center">ĐĂNG KÝ TƯ VẤN</p>
            <p class="note">Đăng ký tư vấn từ 11.11 đến 24.11 & nhận học bổng lên đến 7 triệu tại ILA!</p>
        </div>
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                <p class="note">{!! $error !!}</p>
                @endforeach
            </div>
        @endif
        <form class="form" id="form-backtohome" action="{!! route('teacherday.post') !!}" method="POST">
            {!! csrf_field(); !!}
            @honeypot('honeypot_name', 'honeypot_time')
            <div class="form-group">
                <input type="text" class="form-control" name="parentname" placeholder="Tên Phụ Huynh (*)" value="{!! old('parentname') !!}">
            </div>
            <!-- <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Tên Học Viên (*)" value="{!! old('fullname') !!}">
            </div> -->
            <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Số điện thoại liên lạc (*)" value="{!! old('phone') !!}">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email (*)" value="{!! old('email') !!}">
            </div>
            <div class="form-group">
                <select class="form-control" name="center_id">
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
                        <option value="{!! $product->id !!}">{!! $product->name !!}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-button">
                <input type="submit" name="btn-submit" class="btn-register" value="Đăng Ký Ngay">
            </div>
        </form>
    </div>
@stop

@section('script')
<script src="{!! asset('public/assets/teacherday/js/script.js') !!}"></script>
<script>
        $('#form-backtohome select').select2();

        var program_select =  $('#form-backtohome #program_selection').select2();
        $(".btn-scroll-product").on("click", function (e) {
        var $scrollEle = $(this).data("scroll");
        var value = $(this).data('value');
        console.log(value);
        if(value == 14 || value == 13 || value == 15){
            program_select.val(value).trigger('change');
        }
        $('html, body').stop().animate({
            scrollTop: $($scrollEle).offset().top - 80
        }, 1000);
        e.preventDefault();
        });
  </script>
@stop