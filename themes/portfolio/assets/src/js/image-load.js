jQuery(document).ready(function ($) {
  $('.image-load img')
    .on('load', function (e) {
      $(this).parent().addClass('loaded');
    })
    .each(function () {
      if (this.complete) {
        $(this).trigger('load');
      }
    });
});
