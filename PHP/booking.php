<?php 
include '..\partials\nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\public\css\booking.css">

    <title>Appointment Booking System</title>
</head>
<body>
<div class=book1>
    <button class=btext1><a class=btext111 href="index.php">Home</a>/Booking</button>
<p class=btext2>Book an Appointment</p>
</div>
<br><br>
<div class=bookingform>
    <form action="..\PHP\process.php" method="post">
 
         <label for="doctor_id">Doctor:</label>
        <select name="doctor_id" required class=opt1> 
            <!-- Fetch doctors from the 'doctor' table -->
            <?php
            include '..\includes\dbh.inc.php';
            
            $conn = OpenCon();

            $sql = "SELECT id, name FROM doctor";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['id']}'>{$row['name']}</option>";
            }

            CloseCon($conn);
            ?>
        </select><br><br>

        <label for="patient_id">Patient:</label>
        <select name="patient_id" required class=opt2>
            <!-- Fetch patients from the 'user' table -->
            <?php
            $conn = OpenCon();

            $sql = "SELECT id, name FROM user";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['id']}'>{$row['name']}</option>";
            }

            CloseCon($conn);
            ?>
        </select><br><br>
        <span>
        <!-- <label for="appointment_date">Appointment Date:</label> -->
        <input type="date" class=opt3 name="appointment_date" required>

        <!-- <label for="appointment_time">Appointment Time:</label> -->
        <input type="time" class=opt4 name="appointment_time" required>
        <br><br>
        </span>
        <span>
        <input type="submit" class=submitbtn  value="Book Appointment">
        <button class=cancelbtn><a class=cancelbtn1 href="index.php">Cancel</a></button>
        </span>
    </form>
        </div>
</body>
</html>
<?php 
include '..\partials\footer.php';
?>
