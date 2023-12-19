<?php
include '..\includes\dbh.inc.php';
$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_id = $_POST["doctor_id"];
    $patient_id = $_POST["patient_id"];
    $appointment_date = $_POST["appointment_date"];

    $sql = "INSERT INTO appointment (doctor_id, patient_id, Date) 
            VALUES ('$doctor_id', '$patient_id', '$appointment_date')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../php/successfeedback.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

CloseCon($conn);
?>