<?php
include 'partials/nav.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/profile.css">
    <title>Profile</title>
</head>
<body>
<div class="MAIN">
        <div class="signup">
          <h1 class="sign">Welcome</h1>
      </div>
<div class="all">
      <div class="info">
        <p>Name: </p>
        <p>Email: </p>
        <p>Address: </p>
      </div>
        
      <div class="right-nav">
             <nav class="profile-nav">
              <ul>
                <li>
                  <a href="index.php" >
                  <i class="fa-solid fa-house" style="color: #1f1fb8;"></i>
                  Dashboard
                  </a>

                <li>
                  <a href="/user/wishlist">
                  <i class="fa-regular fa-calendar-check" style="color: #1f1fb8;"></i>
                  Register
                  </a>
                </li>
                
                <li>
                  <a href="/user/wishlist">
                  <i class="fa-solid fa-clock-rotate-left" style="color: #1f1fb8;"></i>
                  History
                  </a>
                </li>

                <li>
                  <a href="editProfile.php">
                    <i class="fa-regular fa-pen-to-square" style="color: #1f1fb8;"></i>
                    Edit Profile
                  </a>
                </li>

                <li>
                  <a href="logOut.php">
                  <i class="fa-solid fa-arrow-right-from-bracket" style="color: #1f1fb8;"></i>
                    Logout</a>
                </li>
              </ul>
             </nav>
          </div>
        </div>
        </div>
</body>
</html>
<?php
include "../partials/footer.php";
?>