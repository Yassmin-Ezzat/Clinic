<?php
session_start();
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
    <input id="fir" type="text" class="element" name="Firstname" value="<?php echo isset($_SESSION['Name']) ? $_SESSION['Name'] : ''; ?>"><br>

    <input id="Age" type="number" class="element" name="Age" value="<?php echo isset($_SESSION['Age']) ? $_SESSION['Age'] : ''; ?>"><br>

    <input id="ema" type="email" class="element" name="email" value="<?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : ''; ?>"><br>

    <input id="add" type="text" class="element" name="address" value="<?php echo isset($_SESSION['Address']) ? $_SESSION['Address'] : ''; ?>"><br>

    <input id="pa" type="text" class="element" name="pas" placeholder="Password" value="<?php echo isset($_SESSION['Password']) ? $_SESSION['Password'] :''; ?>"><br>

    <input id="pac" type="password" class="element" name="pasconfirm" placeholder="Confirm Password"><br>

    <input class="submit" type="submit" value="Update"><br>
    <input class="submit" type="submit" value="Back"><br>
</form>
</div>


</body>
</html>