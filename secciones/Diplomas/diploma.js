let slides = document.querySelectorAll('.slideshow');
let currentSlide = 0;
let slideInterval = setInterval(nextSlide, 3000);

function nextSlide() {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('active');
}

window.onload = function() {
    slides[currentSlide].classList.add('active');
};
