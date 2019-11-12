@extends('layouts.layout-teacherday')

@section('tracking')

@stop

@section('content')
<div class="form-section " id="form-otp" data-aos="fade-up">
      <div class="title-wrapper">
            <img src="{!! asset('public/assets/teacherday/imgs/teacherday/otp-ic.png') !!}"
                  class="img-fluid img-circle img-ic" />
            <p class="form-title text-center">Xác thực số điện thoại di động</p>
            <p class="note">An OTP has been sent to your registered phone number: {{$phone}}. Please
                  enter the OTP to complete the registration process.</p>
      </div>
      @if($errors->any())
      <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
            <p class="note">{!! $error !!}</p>
            @endforeach
      </div>
      @endif
      <form class="form" id="form-otp" action="{!! route('otp.verify') !!}" method="POST">
            {!! csrf_field(); !!}
            @honeypot('honeypot_name', 'honeypot_time')
            <input type="hidden" name="phone" value="{{$phone}}" />
            <div class="form-group">
                  <input type="text" class="form-control" name="otp" placeholder="Mã OTP" />
            </div>
            <div class="form-button">
                  <input type="submit" name="btn-submit" class="btn-register btn-submit-otp" id="btn-submit-otp" value="Xác thực">
            </div>
      </form>

</div>
@stop

@section('script')
<script src="{!! asset('public/assets/teacherday/js/script.js') !!}"></script>

@stop