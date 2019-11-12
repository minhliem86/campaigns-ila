@extends('layouts.layout-teacherday')

@section('tracking')

@stop

@section('content')
    <div class="form-section thankyou-form" data-aos="fade-up">
        <p class="form-title text-center thankyou-text"><b>ĐĂNG KÝ THÀNH CÔNG.</b></p>
        <p class="form-title text-center thankyou-text">Cảm ơn bạn đã luôn đồng hành cùng ILA. </p>
        <p class="form-title text-center thankyou-text">Chúng tôi sẽ liên hệ với bạn trong <b>24H – 48H</b> tiếp theo.</p>
    </div>
@stop

@section('script')
<script src="{!! asset('public/assets/teacherday/js/script.js') !!}"></script>

@stop