function LoginHandler() {
    var emailInput = document.getElementById("ema");
    var passwordInput = document.getElementById("pa");

    var email = emailInput.value;
    var password = passwordInput.value;

    var emailError = document.getElementById("error-ema");
    var passwordError = document.getElementById("error-pa");

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