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
                <div class="numbers">0</div>
                <div class="cardName">Appointment Today</div>
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
                       echo '<div class="numbers">' . $sum . '</div>';                    }
    
                }
                ?>
                
                <div class="cardName">Total patients</div>
            </div>

            <div class="iconBx">
                <ion-icon name="people-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">284</div>
                <div class="cardName">Messages</div>
            </div>

            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">$7,842</div>
                <div class="cardName">Earning</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>

</body>

</html>