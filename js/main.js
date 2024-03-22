window.addEventListener("load", function () {
  const carousel = document.querySelector('.carousell');
  const prevButton = document.querySelector('.arrow-header.prev');
  const nextButton = document.querySelector('.arrow-header.next');
  const dots = document.querySelectorAll('.dot');

  let currentIndex = 0;
  let autoSlideInterval;
  let isNavigatingWithArrows = false;

  function updateCarousel() {
      const carouselWidth = carousel.clientWidth;
      carousel.style.transform = `translateX(${-currentIndex * carouselWidth}px)`;
      updateDots();
  }

  function updateDots() {
      dots.forEach(dot => dot.classList.remove('dot-active'));
      const activeIndex = currentIndex % dots.length;
      dots[activeIndex >= 0 ? activeIndex : dots.length + activeIndex].classList.add('dot-active');
  }

  function moveToIndex(index) {
      currentIndex = index;
      updateCarousel();
  }

  function nextSlide() {
      currentIndex++;
      if (currentIndex >= dots.length) {
          currentIndex = 0;
      }
      updateCarousel();
  }

  function prevSlide() {
      currentIndex--;
      if (currentIndex < 0) {
          currentIndex = dots.length - 1;
      }
      updateCarousel();
  }

  prevButton.addEventListener('mousedown', function () {
      isNavigatingWithArrows = true;
      stopAutoSlide(); // Detener el slider automático cuando se presiona el botón de flecha
      prevSlide();
  });

  nextButton.addEventListener('mousedown', function () {
      isNavigatingWithArrows = true;
      stopAutoSlide(); // Detener el slider automático cuando se presiona el botón de flecha
      nextSlide();
  });

  prevButton.addEventListener('mouseup', function () {
      isNavigatingWithArrows = false;
      startAutoSlide(); // Reanudar el slider automático cuando se suelta el botón de flecha
  });

  nextButton.addEventListener('mouseup', function () {
      isNavigatingWithArrows = false;
      startAutoSlide(); // Reanudar el slider automático cuando se suelta el botón de flecha
  });

  dots.forEach((dot, index) => {
      dot.addEventListener('click', function () {
          moveToIndex(index);
      });
  });

  function startAutoSlide() {
      autoSlideInterval = setInterval(function () {
          if (!isNavigatingWithArrows) {
              nextSlide();
          }
      }, 5000);
  }

  function stopAutoSlide() {
      clearInterval(autoSlideInterval);
      isNavigatingWithArrows = false;
  }

  carousel.addEventListener('mouseenter', stopAutoSlide);
  carousel.addEventListener('mouseleave', startAutoSlide);

  // Iniciar el slider automático después de que la página haya cargado completamente
  startAutoSlide();

  updateCarousel();
});

