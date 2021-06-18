const passwordField = document.querySelector(".form .fields input[type='password']"),
toggleBtn = document.querySelector(".form .fields i");

toggleBtn.onclick = ()=> {
    if(passwordField.type == "text") {
        passwordField.type = "password";
        toggleBtn.classList.remove("active");

    } else {
        passwordField.type = "text";
        toggleBtn.classList.add("active");
    }
}