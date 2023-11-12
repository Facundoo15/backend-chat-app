const formulario = document.querySelector(".singup form");
const continuarBoton = formulario.querySelector(".button input")
const errorText = formulario.querySelector(".error-txt");

formulario.onsubmit = (e) => {
    e.preventDefault();

}



continuarBoton.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/ingresar.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == "success") {
                    location.href = "../usuarios.php";
                    console.log("Error");
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(formulario);
    xhr.send(formData);
}