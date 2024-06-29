document.querySelectorAll('.slider').forEach((slider) => {
    const slides = slider.querySelectorAll('.slide');
    const prevArrow = slider.querySelector('.slider-arrow-left');
    const nextArrow = slider.querySelector('.slider-arrow-right');
    
    let currentSlide = 0;
    
    function updateSlide() {
      slides.forEach((slide) => {
        slide.classList.remove('active');
      });
      slides[currentSlide].classList.add('active');
    }
    
    function nextSlide() {
      if (currentSlide === slides.length - 1) {
        currentSlide = 0;
      } else {
        currentSlide++;
      }
      updateSlide();
    }
    
    function prevSlide() {
      if (currentSlide === 0) {
        currentSlide = slides.length - 1;
      } else {
        currentSlide--;
      }
      updateSlide();
    }
    
    nextArrow?.addEventListener('click', nextSlide);
    prevArrow?.addEventListener('click', prevSlide);
    
    setInterval(nextSlide, 10000);
});

