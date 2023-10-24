function signupHandler() {
    var firstName = document.forms["sign-up"]["Firstname"].value;
    var lastName = document.forms["sign-up"]["lastname"].value;
    var email = document.forms["sign-up"]["email"].value;
    var password = document.forms["sign-up"]["password"].value;
    var confirmPassword = document.forms["sign-up"]["confirm_password"].value;

    var errorDiv = document.querySelectorAll(".error-message");
    errorDiv.forEach(function (element) {
        element.innerHTML = "";
    });

    if (firstName === "") {
        document.getElementById("error-fir").innerHTML = "First name is required.";
        return false;
    }

    if (lastName === "") {
        document.getElementById("error-las").innerHTML = "Last name is required.";
        return false;
    }

    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!email.match(emailPattern)) {
        document.getElementById("error-ema").innerHTML = "Invalid email format.";
        return false;
    }

    if (password.length < 8) {
        document.getElementById("error-pa").innerHTML = "Password must be at least 8 characters long.";
        return false;
    }

    if (password !== confirmPassword) {
        document.getElementById("error-pac").innerHTML = "Passwords do not match.";
        return false;
    }

    return true;
}
