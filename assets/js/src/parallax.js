document.addEventListener('DOMContentLoaded', function () {
  const hero = document.querySelector('.hero');
  if (hero && window.innerWidth > 768) {
    // Disable parallax on mobile
    let lastScroll = 0;
    let ticking = false;

    window.addEventListener('scroll', function () {
      if (!ticking) {
        window.requestAnimationFrame(function () {
          const scrollPosition = window.pageYOffset;
          const offset = scrollPosition * 0.4; // Adjust speed here
          hero.style.backgroundPositionY = `${offset}px`;
          ticking = false;
        });
        ticking = true;
      }
    });
  }
});
