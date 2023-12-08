<?php
include "../view/sidebar.php";
include "../db/dbh.inc.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../public/css/dashboard.css">
</head>

<body>
    <div class="cardBox">
        <div class="card">
            <div>
            <?php
                $todayDate = date("Y-m-d");
                $query = "SELECT * FROM appointment WHERE data= '$todayDate'";
                $result = mysqli_query($connection, $query);
                if (!$result) {
                    die("Query failed: " . mysqli_error($connection));
                } else {
                    $sum=0;
                    while ($row = mysqli_fetch_assoc($result)) {
                       $sum++;
                        }
                  echo '<div class="numbers">' . $sum . '</div>';
                }
                ?>
                <div class="cardName">Appointments Today</div>
            </div>

            <div class="iconBx">
                <ion-icon name="schedule-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <?php
                $query = "SELECT * FROM patient";
                $result = mysqli_query($connection, $query);
                if (!$result) {
                    die("Query failed: " . mysqli_error($connection));
                } else {
                    $sum=0;
                    while ($row = mysqli_fetch_assoc($result)) {
                       $sum++;
                        }
                    echo '<div class="numbers">' . $sum . '</div>';
                }
                ?>
                
                <div class="cardName">Patients</div>
            </div>

            <div class="iconBx">
                <ion-icon name="people-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
            <?php
                $query = "SELECT * FROM doctor";
                $result = mysqli_query($connection, $query);
                if (!$result) {
                    die("Query failed: " . mysqli_error($connection));
                } else {
                    $sum=0;
                    while ($row = mysqli_fetch_assoc($result)) {
                       $sum++;
                    }
                    echo '<div class="numbers">' . $sum . '</div>';
                }
                ?>
                
                <div class="cardName">Doctors</div>
            </div>

            <div class="iconBx">
                <ion-icon name="people-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
            <?php
                $query = "SELECT * FROM nurse";
                $result = mysqli_query($connection, $query);
                if (!$result) {
                    die("Query failed: " . mysqli_error($connection));
                } else {
                    $sum=0;
                    while ($row = mysqli_fetch_assoc($result)) {
                       $sum++;
                       }
                 echo '<div class="numbers">' . $sum . '</div>';
                }
                ?>
                <div class="cardName">Nurses</div>
            </div>

            <div class="iconBx">
                <ion-icon name="people-outline"></ion-icon>
            </div>
        </div>
    </div>

</body>

</html>