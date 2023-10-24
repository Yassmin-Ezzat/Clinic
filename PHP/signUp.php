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
        <form name="sign-up" action="../includes/user.php" method="post" onsubmit="return signupHandler()">

            <input type="hidden" name="action" value="InsertUser">

            <input id="fir" type="text" class="element" name="Firstname" placeholder="First Name">
            <div class="error-message" id="error-fir"></div>

            <input id="las" type="text" class="element" name="lastname" placeholder="Last Name">
            <div class="error-message" id="error-las"></div>

            <input id="ema" type="email" class="element" name="email" placeholder="Email">
            <div class="error-message" id="error-ema"></div>

            <input id="add" type="text" class="element" name="address" placeholder="Address">
            <div class="error-message" id="error-add"></div>

            <input id="pa" type="password" class="element" name="password" placeholder="Password">
            <div class="error-message" id="error-pa"></div>

            <input id="pac" type="password" class="element" name="confirm_password" placeholder="Confirm Password">
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


