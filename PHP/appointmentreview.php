<?php
include "../partials/nav.php";
include '..\includes\dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/appointmentreview.css">
    <title>appointment review</title>
</head>
<body>
  <?php
session_start();

// Check if success flag is present
if (isset($_GET['success']) && $_GET['success'] === 'true') {
    // Display success message
    echo "<h1>Appointment booked successfully</h1>";
}

if (isset($_SESSION['name'])) {
  $userName = $_SESSION['name'];
} else {
  // Redirect to the login page if the user is not logged in
  header("Location: LogIn.php");
  exit();
}

?>
<h1>Welcome <?php echo $userName; ?></h1>
<br><br><br>

<table id="customers">

  <tr>
    <th>Available Appointments</th>
  </tr>

</table>
<br> 
<?php
// Fetch upcoming appointments with doctor and patient details from the 'appointment' table
$conn = OpenCon();

$sql = "SELECT appointment.Appointment_id, doctor.Name AS doctor_name, user.Name AS patient_name, 
        appointment.Date, appointment.Time 
        FROM appointment 
        INNER JOIN doctor ON appointment.doctor_id = doctor.id 
        INNER JOIN user ON appointment.patient_id = user.id 
        WHERE appointment.Date > NOW() 
        ORDER BY appointment.Date, appointment.Time";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "<table id=customer>
            <tr>
                <th>Appointment ID</th>
                <th>Doctor</th>
                <th>Patient</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
      $formattedTime = isset($row['Time']) ?date("h:i A", strtotime($row['Time'])):'';
        echo "<tr>
                <td>{$row['Appointment_id']}</td>
                <td>{$row['doctor_name']}</td>
                <td>{$row['patient_name']}</td>
                <td>{$row['Date']}</td>
                <td>{$formattedTime}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No upcoming appointments.</p>";
}

CloseCon($conn);

  


?>
  <br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<?php
include '..\partials\footer.php';
?>

