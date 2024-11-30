function showAlert(message) {
    var alertBox = document.querySelector('.alert');
    if (alertBox) {
        alertBox.textContent = message; // Establece el mensaje de alerta
        alertBox.style.display = 'block'; // Muestra el contenedor de alerta
    } else {
        console.error('Alert box not found');
    }
}

function hideAlert() {
    var alertBox = document.querySelector('.alert');
    if (alertBox) {
        alertBox.style.display = 'none'; // Oculta el contenedor de alerta
    } else {
        console.error('Alert box not found');
    }
}

