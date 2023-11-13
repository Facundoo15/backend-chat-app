const formulario = document.querySelector(".typing-area");
const inputField = formulario.querySelector(".input-field");
const sendBtn = formulario.querySelector("button");
const chatBox = document.querySelector(".chat-box")

formulario.onsubmit = (e) => {
    e.preventDefault();
}

sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert_chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                inputField.value = "";
                scrollBottom();
            }
        }
    }
    let formData = new FormData(formulario);
    xhr.send(formData);
}

chatBox.onmouseenter = () => {
    chatBox.classList.add("active");
}


chatBox.onmouseleave = () => {
    chatBox.classList.remove("active");
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get_chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                if (!chatBox.classList.contains("active")) {
                    scrollBottom();
                }
            }
        }
    }

    let formData = new FormData(formulario);
    xhr.send(formData);
}, 500);


function scrollBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}