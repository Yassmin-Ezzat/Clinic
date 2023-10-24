<?php 
include 'partials/nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_signUp_style.css">
    <title>Log In</title>
</head>
<body>


<div class="signup">
        <p class="sign">Log In</p>
    </div>

    <div class="sign">
    <form name="log-in" action="#" method="post" onsubmit="#">
        <input id="ema" type="email" class="element" name="email" placeholder="Email"><br>

        <input id="pa" type="password" class="element" name="pas" placeholder="Password"><br>

        <input class="submit" type="submit" value="Log In"><br>
    </form>

    <div>
        <a href="signUp.php" class="forgot">Don't have an account? Sign Up here</a>
    </div>
</div>


</body>
</html>