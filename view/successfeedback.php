<?php 
include '..\partials\nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/appointmentreview.css">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
        padding:270px;
    }
    </style>
<body>
    <?php
session_start();

// Display success message
echo "<h1>Appointment booked successfully</h1>";

// Redirect to appointment review page with a success flag
header("Location: ../view/appointmentreview.php?success=true");
exit(); // Ensure that no further code is executed after the redirection
?>
</body>
</html>
<?php 
include '..\partials\footer.php';
?>
