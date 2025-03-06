document.addEventListener('DOMContentLoaded', function() {
    // Elementos del DOM
    const button = document.getElementById("ai-button");
    const chatWindow = document.getElementById("chat-window");
    const chatBody = document.getElementById("chat-body");
    const chatInput = document.getElementById("pregunta1");
    const enviarBtn = document.getElementById("enviar-btn"); // Selecciona el botón por su ID

    // Verifica que los elementos existan
    if (!button || !chatWindow || !chatBody || !chatInput || !enviarBtn) {
        console.error("Uno o más elementos no se encontraron en el DOM.");
        return;
    }

    // Variables globales
    let isSending = false; // Controla si hay una solicitud en proceso
    let offsetX, offsetY;  // Variables para el arrastre

    // Función para mostrar mensajes del usuario en el chat
    function mostrarMensajeUsuario(mensaje) {
        chatBody.innerHTML += `<div><strong>Tú:</strong> ${mensaje}</div>`;
        chatBody.scrollTop = chatBody.scrollHeight; // Desplazar al final del chat
    }

    // Función para mostrar respuestas de la IA en el chat
    function mostrarRespuestaIA(respuesta) {
        chatBody.innerHTML += `<div><strong>IA:</strong> ${respuesta}</div>`;
        chatBody.scrollTop = chatBody.scrollHeight; // Desplazar al final del chat
    }

    // Función para mostrar errores en el chat
    function mostrarError(mensaje) {
        chatBody.innerHTML += `<div class="error"><strong>Error:</strong> ${mensaje}</div>`;
        chatBody.scrollTop = chatBody.scrollHeight; // Desplazar al final del chat
    }

    // Función para desactivar el botón de enviar durante una solicitud
    function desactivarEnvio() {
        enviarBtn.disabled = true;
        enviarBtn.textContent = "Enviando...";
    }

    // Función para reactivar el botón de enviar después de una solicitud
    function reactivarEnvio() {
        enviarBtn.disabled = false;
        enviarBtn.textContent = "Enviar";
    }
// Función para enviar preguntas al backend
async function enviarPregunta(pregunta) {
    const respuestas = {
        "pregunta": pregunta
    };

    const response = await fetch('http://localhost/Plataforma_Educativa/ia/main.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ respuestas: respuestas })
    });

    if (!response.ok) {
        throw new Error("Error en la respuesta del servidor");
    }

    const data = await response.json();
    return data; // Devuelve el objeto JSON completo
}

// Función para manejar el envío de respuestas
function enviarRespuestas() {
    if (isSending) {
        mostrarError("Espera a que se complete la solicitud actual.");
        return;
    }

    const pregunta = chatInput.value.trim();

    if (!pregunta) {
        mostrarError("Por favor, escribe una pregunta.");
        return;
    }

    mostrarMensajeUsuario(pregunta);
    desactivarEnvio();
    isSending = true;

    enviarPregunta(pregunta)
        .then(data => {
            // Si la respuesta es un string, muéstrala directamente
            if (typeof data === "string") {
                mostrarRespuestaIA(data);
            }
            // Si la respuesta es un objeto con una propiedad "respuesta"
            else if (data.respuesta) {
                mostrarRespuestaIA(data.respuesta);
            }
            // Si la respuesta es un objeto con una propiedad "message"
            else if (data.message) {
                mostrarRespuestaIA(data.message);
            }
            // Si la respuesta no tiene un formato reconocido
            else {
                mostrarError("Formato de respuesta no reconocido.");
            }
        })
        .catch(error => {
            mostrarError("Hubo un error al procesar tu pregunta. Inténtalo de nuevo.");
        })
        .finally(() => {
            reactivarEnvio();
            isSending = false;
        });

    chatInput.value = ""; // Limpiar el campo de texto
}

// Configurar el evento de clic para abrir/cerrar la ventana de chat
button.addEventListener("click", () => {
    if (chatWindow.style.display === "none" || chatWindow.style.display === "") {
        chatWindow.style.display = "block";
    } else {
        chatWindow.style.display = "none";
    }
});

// Configurar el arrastre del botón flotante y la ventana de chat
button.addEventListener('mousedown', function(e) {
    offsetX = e.clientX - button.getBoundingClientRect().left;
    offsetY = e.clientY - button.getBoundingClientRect().top;

    function moveAt(e) {
        const newX = e.clientX - offsetX;
        const newY = e.clientY - offsetY;

        button.style.left = newX + 'px';
        button.style.top = newY + 'px';
        chatWindow.style.left = newX + 70 + 'px';
        chatWindow.style.top = newY + 'px';
    }

    document.addEventListener('mousemove', moveAt);

    document.addEventListener('mouseup', function() {
        document.removeEventListener('mousemove', moveAt);
    });
});

// Configurar el evento de clic para enviar preguntas
enviarBtn.addEventListener('click', enviarRespuestas);
        }
    )
