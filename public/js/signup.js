function signupHandler(event) {
    event.preventDefault();

    let fullName = document.getElementById("Name").value;
    let age = document.getElementById("Age").value;
    let email = document.getElementById("Email").value;
    let address = document.getElementById("Address").value;
    let password = document.getElementById("Password").value;
    let confirmPassword = document.getElementById("confirm_password").value;

    let errorDivs = document.querySelectorAll(".error-message");
    errorDivs.forEach(function(element) {
        element.innerHTML = "";
    });

    let isValid = true;

    if (fullName.trim() === "") {
        document.getElementById("error-name").innerHTML = "Full name is required.";
        isValid = false;
    }

    if (age.trim() === "" || isNaN(age)) {
        document.getElementById("error-age").innerHTML = "Valid age is required.";
        isValid = false;
    }

    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!email.match(emailPattern)) {
        document.getElementById("error-ema").innerHTML = "Invalid email format.";
        isValid = false;
    }

    if (address.trim() === "") {
        document.getElementById("error-add").innerHTML = "Address is required.";
        isValid = false;
    }

    if (password.length < 8) {
        document.getElementById("error-pa").innerHTML = "Password must be at least 8 characters long.";
        isValid = false;
    }

    if (password !== confirmPassword) {
        document.getElementById("error-pac").innerHTML = "Passwords do not match.";
        isValid = false;
    }

    if (isValid) {
        document.forms["sign-up"].submit();
    }
}