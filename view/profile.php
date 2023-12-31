<?php
session_start();
include '../partials/nav.php';
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
      <div class="all-1">
<div class="all">
<?php
    if (isset($_SESSION["Name"], $_SESSION["Email"], $_SESSION["Address"])) {
        echo "<p>Name: " . $_SESSION["Name"] . "</p><br>";
        echo "<p>Email:" . $_SESSION["Email"] . "</p><br>";
        echo "<p>Address: " . $_SESSION["Address"] . "</p><br>";
    } else {
        echo "<p>Session data not available.</p>";
    }
    ?>
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
                  <a href="booking.php">
                  <i class="fa-regular fa-calendar-check" style="color: #1f1fb8;"></i>
                  Register
                  </a>
                </li>
                
                <li>
                  <a href="appointmentreview.php">
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
        </div>
</body>
</html>
<?php
include "../partials/footer.php";
?>