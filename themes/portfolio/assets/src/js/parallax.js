jQuery(document).ready(function ($) {
  // Simple Parallax effect
  let speed = 0.35;
  $(document).on('scroll', function () {
    const distance = $(window).scrollTop();
    $('.parallax--simple').css('top', distance * speed + 'px');
  });
});
