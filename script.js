const slider = document.querySelector('.slider');
const slides = slider.querySelectorAll('img');
const prevArrow = slider.querySelector('.slider-arrow-left');
const nextArrow = slider.querySelector('.slider-arrow-right');
const text = document.querySelector('.slider-text');
const text2 = document.querySelector('.slider-text2');

// Define an array of slide text Titre
const slideText = [  "Bienvenue",  "Un magicien près de vous ...",  "Des initiations..."];

//Define an array of slide text
const slideText2 = [  "Bonjour, je me présente. Je suis Maxime CLAUDEL, magicien à votre service",  "Un magicien pour de la magie rapprochée, pensez au close-up",  
"Découvrez la magie et ses spécialités (cartes, sculpture de ballon, magie classique)"];

let currentSlide = 0;

function updateSlide() {
  slides.forEach((slide) => {
    slide.classList.remove('active');
  });
  slides[currentSlide].classList.add('active');

  // Update the text below the slider
  text.innerHTML = slideText[currentSlide];
}

function updateSlide2() {
  slides.forEach((slide) => {
    slide.classList.remove('active');
  });
  slides[currentSlide].classList.add('active');

  // Update the text below the slider
  text2.innerHTML = slideText2[currentSlide];
  
}

// Call the updateSlide function to display the text of the first slide
updateSlide();
updateSlide2();


function nextSlide() {
  if (currentSlide === slides.length - 1) {
    currentSlide = 0;
  } else {
    currentSlide++;
  }
  updateSlide();
  updateSlide2();
}

function prevSlide() {
  if (currentSlide === 0) {
    currentSlide = slides.length - 1;
  } else {
    currentSlide--;
  }
  updateSlide();
  updateSlide2();
}

nextArrow.addEventListener('click', nextSlide);
prevArrow.addEventListener('click', prevSlide);

setInterval(nextSlide, 60000);
