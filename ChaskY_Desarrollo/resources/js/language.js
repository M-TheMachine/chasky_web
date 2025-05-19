export const locale = window.document.documentElement.lang || 'es';

// Función para obtener traducciones
export function __(key, fallback = '') {
    // Intentar obtener la traducción desde un objeto global
    if (window.translations && window.translations[locale] && window.translations[locale][key]) {
        return window.translations[locale][key];
    }
    
    // Devolver la clave o el fallback
    return fallback || key;
}

// Detectar cambios en el idioma (útil para componentes reactivos)
export function onLocaleChange(callback) {
    const cookieObserver = {
        start() {
            this.interval = setInterval(() => {
                const currentLocale = document.documentElement.lang;
                if (currentLocale !== locale) {
                    callback(currentLocale);
                    // Recargar la página para aplicar los cambios
                    window.location.reload();
                }
            }, 1000);
        },
        stop() {
            clearInterval(this.interval);
        }
    };
    
    // Comenzar a observar
    cookieObserver.start();
    
    // Devolver una función para detener la observación
    return () => cookieObserver.stop();
}
