import './bootstrap';
import Alpine from 'alpinejs';
import jQuery from 'jquery';
import 'daterangepicker';
import 'daterangepicker/daterangepicker.css';


// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';


window.$ = jQuery;

window.Alpine = Alpine;

Alpine.start();

var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 8,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});




