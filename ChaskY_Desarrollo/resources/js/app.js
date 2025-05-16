import './bootstrap';
import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Inicializar Alpine.js
window.Alpine = Alpine;
Alpine.start();

// Inicializar AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100,
        disable: false,
    });
});

// Reiniciar AOS cuando se carguen imágenes o cambien elementos dinámicos
window.addEventListener('load', () => {
    AOS.refresh();
});

// Configurar Swiper
const swiperModules = [Navigation, Pagination, Autoplay];
window.Swiper = Swiper;
window.swiperModules = swiperModules;
