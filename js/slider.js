const slides = document.querySelector('.slides');
const images = slides.querySelectorAll('img');
let currentIndex = 0;

function showNextSlide() {
    currentIndex++;
    if (currentIndex >= images.length) {
        currentIndex = 0;
    }
    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}

setInterval(showNextSlide, 7200); 


 

