// AOS (Animate On Scroll) Basic Implementation
(() => {
  const aosElements = document.querySelectorAll('[data-aos]');
  
  const isElementInViewport = (el) => {
    const rect = el.getBoundingClientRect();
    return (
      rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.75 &&
      rect.bottom >= 0
    );
  };
  
  const handleScroll = () => {
    aosElements.forEach(element => {
      if (isElementInViewport(element)) {
        element.classList.add('aos-animate');
      } else if (!element.hasAttribute('data-aos-once')) {
        element.classList.remove('aos-animate');
      }
    });
  };
  
  // Initialize AOS
  const init = (settings = {}) => {
    // Apply default settings
    const options = {
      duration: settings.duration || 800,
      easing: settings.easing || 'ease-in-out',
      once: settings.once || false,
      delay: settings.delay || 0,
      offset: settings.offset || 100,
      disable: settings.disable || false
    };
    
    if (options.disable) return;
    
    // Set CSS variables for duration, etc if needed
    aosElements.forEach(element => {
      // Apply custom delay if specified
      const delay = element.getAttribute('data-aos-delay');
      if (delay) {
        element.style.transitionDelay = `${delay}ms`;
      }
    });
    
    // Initial check for elements in viewport
    handleScroll();
    
    // Add scroll listener
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', handleScroll);
  };
  
  // Make AOS globally available
  window.AOS = {
    init: init,
    refresh: handleScroll
  };
  
  // Auto initialize on load
  window.addEventListener('load', () => {
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      offset: 100
    });
  });
})();
