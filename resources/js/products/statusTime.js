setTimeout(() => {
    const statusMessage = document.getElementById('statusMessage');
    if (statusMessage) {
        statusMessage.style.transition = 'opacity 0.5s ease'; // Animación de desvanecimiento
        statusMessage.style.opacity = '0'; // Desvanecer
        setTimeout(() => statusMessage.remove(), 500); // Remover después de la animación
    }
}, 2000);
