$(document).ready(function(){
      AOS.init({
          once: true
    });

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

$('#btn-submit-otp').on('click', function(){
  $('#form-otp').submit();
  $(this).prop('disabled', true);

})

$('#btn-submit-form').on('click', function(){
  $('#form-backtohome').submit();
  $(this).prop('disabled', true);

})

})