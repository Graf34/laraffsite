import 'bootstrap';

import Swiper from 'swiper';
import 'swiper/css';

// Инициализация после загрузки DOM
document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.sectionNav', {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 0,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 40,
            }
        }
    });
});