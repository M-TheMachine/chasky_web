// Función para cambiar el idioma
function changeLanguage(locale) {
    // Crear un formulario dinámicamente
    const form = document.createElement('form');
    form.method = 'GET';
    form.action = '/language/' + locale;
    
    // Añadir marca de tiempo para evitar caché
    const timestampInput = document.createElement('input');
    timestampInput.type = 'hidden';
    timestampInput.name = '_';
    timestampInput.value = Date.now();
    form.appendChild(timestampInput);
    
    // Añadir al body, enviar y luego eliminar
    document.body.appendChild(form);
    form.submit();
}
