<?php
include "../partials/nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/signup&login.css">
    <title>Sign Up</title>
</head>
<body>


<div class="signup">
        <p class="sign">Edit Profile</p>
    </div>

    <div class="sign">
    <form name="sign-up" action="#" method="post" onsubmit="#">        
        <input id="fir" type="text" class="element" name="Firstname" placeholder="First Name"><br>

        <input id="las" type="text" class="element" name="last" placeholder="Last Name"><br>

        <input id="ema" type="email" class="element" name="email" placeholder="Email"><br>

        <input id="add" type="text" class="element" name="address" placeholder="Address"><br>

        <input id="pa" type="password" class="element" name="pas" placeholder="Password"><br>

        <input id="pac" type="password" class="element" name="pasconfirm" placeholder="Confirm Password"><br>

        <input class="submit" type="submit" value="Update"><br>
        <input class="submit" type="submit" value="Back"><br>
    </form>
</div>


</body>
</html>