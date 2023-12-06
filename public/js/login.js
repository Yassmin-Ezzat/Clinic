function LoginHandler(event) {
    event.preventDefault();
    let emailInput = document.getElementById("ema");
    let passwordInput = document.getElementById("pa");

    let email = emailInput.value;
    let password = passwordInput.value;

    let emailError = document.getElementById("error-ema");
    let passwordError = document.getElementById("error-pa");

    emailInput.classList.remove("error");
    passwordInput.classList.remove("error");

    emailError.textContent = ""; // Clear any previous error messages
    passwordError.textContent = "";

    if (email.trim() === "") {
        emailInput.classList.add("error");
        emailError.textContent = "Email is required."; // Display error message
        return false;
    }

    if (password.trim() === "") {
        passwordInput.classList.add("error");
        passwordError.textContent = "Password is required."; // Display error message
        return false;
    }
    return true;
}