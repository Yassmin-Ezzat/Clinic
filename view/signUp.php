<?php
include "../partials/nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/signUp&login.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="signup">
        <p class="sign">Sign Up</p>
    </div>

    <div class="sign">
        <form name="sign-up" action="../db/patient.php" method="post" onsubmit="return signupHandler(event)">

            <input type="hidden" name="action" value="InsertUser">

            <input id="Name" type="text" class="element" name="Full_Name" placeholder="Full Name" >
            <div class="error-message" id="error-name"></div>

            <input id="Age" type="number" class="element" name="Age" placeholder="Age" >
            <div class="error-message" id="error-age"></div>

            <input id="Email" type="email" class="element" name="Email" placeholder="Email" >
            <div class="error-message" id="error-ema"></div>

            <input id="Address" type="text" class="element" name="Address" placeholder="Address" >
            <div class="error-message" id="error-add"></div>

            <input id="Password" type="password" class="element" name="Password" placeholder="Password" >
            <div class="error-message" id="error-pa"></div>

            <input id="confirm_password" type="password" class="element" name="confirm_password" placeholder="Confirm Password" >
            <div class="error-message" id="error-pac"></div>

            <input class="submit" type="submit" value="Sign Up">

        </form>

        <div>
            <a href="logIn.php" class="forgot">Already have an account? Login here</a>
        </div>
    </div>
    <script src="../public/js/signup.js"></script>
</body>


</html>