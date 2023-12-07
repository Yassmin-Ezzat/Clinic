<?php
include "../partials/nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/signup&login.css">
    <title>Log In</title>
</head>

<body>
    <div class="signup">
        <p class="sign">Log In</p>
    </div>

    <div class="sign">
        <form name="log-in" action="../db/patient.php" method="post" onsubmit="">

            <input type="hidden" name="action" value="FindUser">

            <input id="ema" type="email" class="element" name="email" placeholder="Email">
            <div class="error-message" id="error-ema"></div><br>

            <input id="pa" type="password" class="element" name="password" placeholder="Password">
            <div class="error-message" id="error-pa"></div><br>

            <input class="submit" type="submit" value="Log In"><br>
        </form>

        <div>
            <a href="signUp.php" class="forgot">Don't have an account? Sign Up here</a>
        </div>
    </div>
    <script src="../public/js/login.js"></script>
    <br>
</body>

</html>