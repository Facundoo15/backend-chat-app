const passwordField = document.querySelector(".form .field input[type='password']"),
    toogleBtn = document.querySelector(".form .field i");

// Tootgle para mostrar o ocultar la contraseña de los formularios
toogleBtn.onclick = () => {
    if (passwordField.type == "password") {
        passwordField.type = "text"
        toogleBtn.classList.add("active");
    } else {
        passwordField.type = "password";
        toogleBtn.classList.remove("active");
    }
}