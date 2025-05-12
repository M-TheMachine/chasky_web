// Inicialización de los carruseles
function initSwipers() {
    // Carrusel de proyectos
    const projectsSwiper = new Swiper('.projectsSwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1.5,
            },
            1024: {
                slidesPerView: 2.5,
            },
        },
    });

    // Carrusel de testimonios
    const testimonialSwiper = new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.testimonial-next',
            prevEl: '.testimonial-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
}

// Efecto de escritura para el título
function initTypewriter() {
    const textElement = document.querySelector('.typing-text');
    if (!textElement) return;

    const words = window.typingWords || ['Digital Solutions', 'Web Experiences', 'Innovative Apps', 'Digital Success'];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let isWaiting = false;

    function type() {
        const currentWord = words[wordIndex];
        
        if (isDeleting) {
            textElement.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
        } else {
            textElement.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
        }

        if (!isDeleting && charIndex === currentWord.length) {
            isWaiting = true;
            setTimeout(() => {
                isDeleting = true;
                isWaiting = false;
            }, 2000);
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
        }

        const typingSpeed = isDeleting ? 100 : 200;
        const delay = isWaiting ? 0 : typingSpeed;

        setTimeout(type, delay);
    }

    type();
}

// Validación del formulario
function initFormValidation() {
    const form = document.querySelector('form');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const fields = {
            nombre: form.querySelector('input[name="nombre"]'),
            email: form.querySelector('input[name="email"]'),
            servicio: form.querySelector('select[name="servicio"]'),
            mensaje: form.querySelector('textarea[name="mensaje"]')
        };
        
        // Remover clases de error previas
        Object.values(fields).forEach(field => {
            if (field) {
                field.classList.remove('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
            }
        });
        
        let hasError = false;
        
        // Validar campos requeridos
        Object.entries(fields).forEach(([key, field]) => {
            if (field && field.hasAttribute('required') && !field.value.trim()) {
                field.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
                hasError = true;
            }
        });
        
        // Validar email
        if (fields.email && !fields.email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
            fields.email.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
            hasError = true;
        }
        
        if (!hasError) {
            // Animación de envío
            const button = form.querySelector('button[type="submit"]');
            button.disabled = true;
            button.innerHTML = `
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Enviando...
            `;
            
            setTimeout(() => {
                form.submit();
            }, 1000);
        }
    });
}

// Efecto parallax
function initParallax() {
    const parallaxSections = document.querySelectorAll('.bg-gradient-to-br');
    
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        
        parallaxSections.forEach(section => {
            if (section.getBoundingClientRect().top < window.innerHeight && 
                section.getBoundingClientRect().bottom > 0) {
                const speed = 0.5;
                const yPos = -(scrolled - section.offsetTop) * speed;
                section.style.backgroundPositionY = `${yPos}px`;
            }
        });
    });
}

// Animaciones de números
function initCounters() {
    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                if (entry.target.classList.contains('counter')) {
                    animateValue(entry.target, 0, parseInt(entry.target.dataset.value), 2000);
                    observer.unobserve(entry.target);
                }
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, {
        threshold: 0.1
    });

    document.querySelectorAll('.animate-on-scroll').forEach(element => {
        observer.observe(element);
    });
}

// Inicialización cuando el DOM está listo
document.addEventListener('DOMContentLoaded', () => {
    // Inicializar AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // Inicializar Swiper
    initSwipers();

    // Inicializar efecto de escritura
    initTypewriter();
});
