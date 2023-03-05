jQuery(document).ready(function ($) {
  // This file is responsible for the effect where items will animate into view when the user has scrolled to a certain point.

  let options = {
    root: null,
    rootMargin: '0px',
    threshold: [0.1, 0.75, 1.0],
  };

  let callback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (entry.intersectionRatio >= 0.1) {
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
