const searchBar = document.querySelector(".users .search input");
const searchBtn = document.querySelector(".users .search button"),
    listaUsuarios = document.querySelector(".users .users-list");

// Toogle para mostrar o ocultar el botón de búsqueda en la página de usuarios
searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value = "";
}

// Petición para buscar un elemento 
searchBar.onkeyup = () => {
    let searchTerm = searchBar.value;
    if (searchTerm != "") {
        searchBar.classList.add("active");
    } else {
        searchBar.classList.remove("active");
    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/buscar.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                listaUsuarios.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

// Listar usuarios con GET
setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/lista_usuarios.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (!searchBar.classList.contains("active")) {
                    listaUsuarios.innerHTML = data;
                }
            }
        }
    }
    xhr.send();
}, 500);