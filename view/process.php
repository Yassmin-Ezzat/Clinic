<?php
 include_once "../db/dbh.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_id = $_POST["doctor_id"];
    $patient_id = $_POST["patient_id"];
    $appointment_date = $_POST["appointment_date"];

    $sql = "INSERT INTO appointment (doctor_id, patient_id, Date) 
            VALUES ('$doctor_id', '$patient_id', '$appointment_date')";

    if (mysqli_query($connection, $sql)) {
        header("Location: ../view/successfeedback.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$connection->close();
?>
