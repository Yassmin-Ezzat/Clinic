<!DOCTYPE html>
<html>
<head>
    <title>Book Appointment</title>
    <link rel="stylesheet" href="../public/css/doctor_details.css">
</head>
<body>
    <h1>Book Appointment</h1>

    <?php
    // Get the doctor name from the URL parameter
    $doctor = $_GET['doctor'];

    // Display the selected doctor's name
    echo '<h2>' . $doctor . '</h2>';

    // Additional booking form can be added here
    ?>

</body>
</html>