jQuery(document).ready(function ($) {
  // This file is responsible for the effect where items will animate into view when the user has scrolled to a certain point.

  let options = {
    root: null,
    rootMargin: '0px',
    threshold: [0.2, 1.0],
  };

  let callback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (entry.intersectionRatio >= 0.2) {
          entry.target.classList.add('in-view');
        }
      } else {
        entry.target.classList.remove('in-view');
      }
    });
  };

  let observer = new IntersectionObserver(callback, options);

  let targets = document.querySelectorAll('.animate-into-view');
  targets.forEach((target) => {
    observer.observe(target);
  });
});

jQuery(document).ready(function ($) {
  // This file is responsible for the effect where items will change background colour when they are visible in the centre of the screen.

  let options = {
    root: null,
    rootMargin: '-40% 0% -40% 0%', // This rootmargin means that the element will only be considered "interescting" if the element is roughly in the centre of the screen.
    threshold: [0, 0.5, 1],
  };

  let callback = (entries, observer) => {
    let inViewClass = 'in-view';
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add(inViewClass);
      } else {
        entry.target.classList.remove(inViewClass);
      }
    });
  };

  let observer = new IntersectionObserver(callback, options);

  let targets = document.querySelectorAll('.colour-shift');

  targets.forEach((target, index) => {
    if ((index + 1) % 2 !== 0) {
      // Add a different class depending on if it is even instance of the element with the .colour-shift class
      target.classList.add('colour-shift-even');
    }
    observer.observe(target);
  });
});

jQuery(document).ready(function ($) {
  $('.hamburger').on('click', function (e) {
    $(this).toggleClass('is-active');
    $('.header-mobile-menu').toggleClass('animate-in-nav');

    // If the menu is active, set the aria-expanded appropriately.
    $(this).attr('aria-expanded', $(this).hasClass('is-active'));
  });
});

jQuery(document).ready(function ($) {
  $('.image-load img').on('load', function (e) {
    $(this).parent().addClass('loaded');
  });
});

jQuery(document).ready(function ($) {
  // Simple Parallax effect
  let speed = 0.35;
  $(document).on('scroll', function () {
    const distance = $(window).scrollTop();
    $('.parallax--simple').css('top', distance * speed + 'px');
  });
});

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
