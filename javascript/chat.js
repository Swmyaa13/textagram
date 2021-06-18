const form = document.querySelector(".typingArea"),
inputField = form.querySelector(".input-field"),
sendButton = form.querySelector("button"),
chatBox = document.querySelector(".chatBox");

form.onsubmit =(e) => {
    e.preventDefault();
}

sendButton.onclick =()=> {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/insertion.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                inputField.value = "";
                scrollBottom();
            }
        }
    } 
    let formData = new FormData(form);
    xhr.send(formData);
}

chatBox.onmouseenter =()=> {
    chatBox.classList.add("active");
}
chatBox.onmouseleave =()=> {
    chatBox.classList.remove("active");
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/getChat.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")) {
                    scrollBottom();
                }
               
            }
        }
    } 
    let formData = new FormData(form);
    xhr.send(formData);
}, 500);

function scrollBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}