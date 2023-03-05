jQuery(document).ready(function ($) {
  $('.hamburger').on('click', function (e) {
    $(this).toggleClass('is-active');
    $('.header-mobile-menu').toggleClass('animate-in-nav');

    // If the menu is active, set the aria-expanded appropriately.
    $(this).attr('aria-expanded', $(this).hasClass('is-active'));
  });
});
