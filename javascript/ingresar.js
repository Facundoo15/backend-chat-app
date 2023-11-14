// Clase para manejar los eventos del registro
const formulario = document.querySelector(".singup form");
const continuarBoton = formulario.querySelector(".button input")
const errorText = formulario.querySelector(".error-txt");

//Previene el evento de actualizar la página por defecto
formulario.onsubmit = (e) => {
    e.preventDefault();

}


// Se hace la petiición POST para ingresar
continuarBoton.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/ingresar.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) { // Estado de la petición
                let data = xhr.response;
                if (data == "success") {
                    location.href = "usuarios.php";
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(formulario);
    xhr.send(formData); // Se envía la data
}