const diplomas = document.querySelector('.diplomas');

// Función para desplazar las imágenes automáticamente
function scrollDiplomas() {
    diplomas.scrollBy(20, 0); // Ajusta el valor para controlar la velocidad
}

// Iniciar el desplazamiento automático
setInterval(scrollDiplomas, 2000); // Ajusta el intervalo en milisegundos