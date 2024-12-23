var globalSlideCounter = 0;

const updators = [...document.querySelectorAll('.slider')].map((slider) => {
    const slides = slider.querySelectorAll('.slide');
    const prevArrow = slider.querySelector('.slider-arrow-left');
    const nextArrow = slider.querySelector('.slider-arrow-right');

    nextArrow?.addEventListener('click', nextSlide);
    prevArrow?.addEventListener('click', prevSlide);
    return () => {
        slides.forEach((slide) => {
            slide.classList.remove('active');
        });
        let currentSlide = (slides.length + (globalSlideCounter % slides.length)) % slides.length;
        slides[currentSlide].classList.add('active');
    };
});

function updateSliders() {
    updators.forEach(updator => updator());
}

function nextSlide() {
    globalSlideCounter++;
    updateSliders();
}

function prevSlide() {
    globalSlideCounter--;
    updateSliders();
}
if(updators.length > 0) {
    setInterval(nextSlide, 10000);
}

