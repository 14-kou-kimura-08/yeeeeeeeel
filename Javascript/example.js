$(function() {
  var $win = $(window),
      $header = $('.header'),
      $logo = $('.logo'),
      $about = $('.about'),
      headeranimationClass = 'header-animation',
      logoanimationClass = 'logo-animation';

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > 50 ) {
      $header.addClass(headeranimationClass);
      $logo.addClass(logoanimationClass);
    } else {
      $header.removeClass(headeranimationClass);
      $logo.removeClass(logoanimationClass);
    }
  });

$(function () {
    var topBtn = $('#page-top');
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});


});
