const slidesContainer = document.querySelector(".slides");
const slides = document.querySelectorAll(".slide");
const slideWidth = slides[0].offsetWidth;
const totalSlides = slides.length;
let currentPosition = 0;

function nextSlide() {
  if (currentPosition < totalSlides - 1) {
    currentPosition++;
    updateSlidePosition();
  }
}

function prevSlide() {
  if (currentPosition > 0) {
    currentPosition--;
    updateSlidePosition();
  }
}

function updateSlidePosition() {
  const newPosition = -currentPosition * slideWidth;
  slidesContainer.style.transform = `translateX(${newPosition}px)`;
}
