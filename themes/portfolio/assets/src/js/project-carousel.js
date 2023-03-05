jQuery(document).ready(function ($) {
  $('.project-carousel-slider').slick({
    slidesToShow: 2,
    arrowsPlacement: 'beforeSlides',
    autoplay: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });
});
