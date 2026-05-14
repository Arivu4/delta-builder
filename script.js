// =====================================
// MOBILE MENU TOGGLE
// =====================================

const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");

if(menuBtn && navLinks){

    menuBtn.addEventListener("click", () => {

        navLinks.classList.toggle("show");

    });

}



// =====================================
// TESTIMONIAL AUTO SLIDER
// =====================================

const slides = document.querySelectorAll(".testimonial-slide");

let currentSlide = 0;

function showSlide(index){

    slides.forEach((slide) => {

        slide.classList.remove("active");

    });

    slides[index].classList.add("active");

}

if(slides.length > 0){

    // Initial Slide
    showSlide(currentSlide);

    // Auto Slide
    setInterval(() => {

        currentSlide++;

        if(currentSlide >= slides.length){

            currentSlide = 0;

        }

        showSlide(currentSlide);

    }, 4000);

}