<?php
include "../partials/nav.php";
include '..\db\dbh.inc.php';
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



?>
<h1>Welcome <?php echo $_SESSION["Name"]; ?></h1>
<br><br><br>

<table id="customers">

  <tr>
    <th>Available Appointments</th>
  </tr>

</table>
<br> 
<?php
// Fetch upcoming appointments with doctor and patient details from the 'appointment' table
include_once "../db/dbh.inc.php";
if (isset($_SESSION['ID'])) {
  $patient_id = $_SESSION['ID'];
  

$sql = "SELECT appointment.Appointment_id,  patient.name AS patient_name, 
        appointment.date, appointment.time 
        FROM appointment 
        INNER JOIN doctor ON appointment.doctor_id = doctor.id 
        INNER JOIN patient ON appointment.patient_id = patient.id 
        WHERE appointment.date > NOW() 
        ORDER BY appointment.date, appointment.time";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table id=customer>
            <tr>
                <th>Appointment ID</th>
                <th>Patient</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
            </tr>";
            $query = "SELECT * FROM appointment WHERE patient_id = '" . $_SESSION['ID'] . "'";
            $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($result)) {
      $formattedTime = isset($row['time']) ?date("h:i A", strtotime($row['time'])):'';
        echo "<tr>
                <td>{$row['Appointment_id']}</td>
                <td>{$_SESSION['Name']}</td>
                <td>{$row['Date']}</td>
                <td>{$formattedTime}</td>
              </tr>";
    }

   } echo "</table>";
} else {
    echo "<p>No upcoming appointments.</p>";
}

$connection->close();

  

?>
  <br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<?php
include '..\partials\footer.php';
?>
