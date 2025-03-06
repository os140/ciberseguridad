// script.js

// 1. Obtener el botón de enviar
const btn = document.getElementById('button');

// 2. Escuchar el evento "submit" del formulario
document.getElementById('errorForm')
  .addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

    // 3. Cambiar el texto del botón a "Enviando..."
    btn.value = 'Enviando...';

    // 4. Definir el Service ID y Template ID de EmailJS
    const serviceID = 'default_service'; // Service ID de EmailJS
    const templateID = 'template_er5kmj8'; // Template ID de EmailJS

    // 5. Enviar el formulario usando EmailJS
    emailjs.sendForm(serviceID, templateID, this)
      .then(() => {
        // 6. Si el envío es exitoso, mostrar una alerta y resetear el formulario
        btn.value = 'Enviar';
        alert('¡Error reportado con éxito! Gracias por tu feedback.');
        document.getElementById('errorForm').reset(); // Limpiar el formulario
      }, (err) => {
        // 7. Si hay un error, mostrar una alerta con el error
        btn.value = 'Enviar';
        alert('Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.');
        console.error(JSON.stringify(err)); // Mostrar el error en la consola
      });
  });