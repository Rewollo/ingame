let categories;
let categoryList;

function categoryOnload() {
    categories = document.querySelectorAll('.cubiq_news');
    categoryList = document.querySelectorAll('.cubiq_list');

    categories[0].classList.remove('unactive');
    categoryList[0].classList.add('active');
}

function openCategories(evt, cityName) {

    categories = document.querySelectorAll('.cubiq_news');
    categoryList = document.querySelectorAll('.cubiq_list');
    let categoriesNews = document.querySelector('#cubiq_categories_news');
    function categoryScroll() {
        categoriesNews.scrollTop = 0;
        categoriesNews.scrollIntoView({block: "start", behavior: "smooth"});
    }
  
    for ( let i = 0; i < categories.length; i++) {
        if (categories[i].classList.contains('unactive') == false) {
            categories[i].classList.add('unactive');
        }
        if (categoryList[i].classList.contains('active')) {
            categoryList[i].classList.remove('active');
        }
    }
    document.querySelector(`#${cityName}`).classList.remove('unactive');
    evt.currentTarget.classList.add('active');
    categoryScroll();
}

document.addEventListener("DOMContentLoaded", categoryOnload);

 
let slideIndex = 1;

showSlides(slideIndex);

function nextSlide() {
    showSlides(slideIndex += 1);
}

function previousSlide() {
    showSlides(slideIndex -= 1);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let slides = document.querySelectorAll(".item");

    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }

    for (let slide of slides) {
        slide.style.display = "none";
    }
    slides[slideIndex - 1].style.display = "grid";
}

let slideTimer;

function slideInterval() {
    slideTimer = setInterval(() => nextSlide(), 5000);
}

function stopTimer() {
    let button = document.querySelectorAll('.button');
    button.onclick = clearInterval(slideTimer);
}

slideInterval();