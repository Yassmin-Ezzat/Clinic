<?php 
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_style.css">
    <title>Sign Up</title>
</head>
<body>


<div class="signup">
        <p class="sign">Sign Up</p>
    </div>

    <div class="sign">
    <form name="sign-up" action="#" method="post" onsubmit="#">        
        <input id="fir" type="text" class="element" name="Firstname" placeholder="First Name"><br>

        <input id="las" type="text" class="element" name="last" placeholder="Last Name"><br>

        <input id="ema" type="email" class="element" name="email" placeholder="Email"><br>

        <input id="add" type="text" class="element" name="address" placeholder="Address"><br>

        <input id="pa" type="password" class="element" name="pas" placeholder="Password"><br>

        <input id="pac" type="password" class="element" name="pasconfirm" placeholder="Confirm Password"><br>

        <input class="submit" type="submit" value="Sign Up"><br>
    </form>

    <div>
        <a href="log in.php" class="forgot">Already have an account? Login here</a>
    </div>
</div>


</body>
</html>