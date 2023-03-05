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
