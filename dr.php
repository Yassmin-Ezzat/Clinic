<?php
include 'partials/nav.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dr.css">
    <title>Doctor Details</title>
</head>
<body>
    <div class="container">
        <div class="doctor-details">
            <div class="doctor-image">
			<img src="Dr. MagdiYacoub.jpg" alt="Dr. MagdiYacoub"  class="rectangle-image">
            </div>
            <div class="doctor-info">
                <p>Speciality: Cardiologist</p><br>
				<h1>Dr. Magdi Yacoub</h1><br>
                <p>Graduated from Cairo University</p><br>
				<button class="book-now-btn" id="bookNowBtn">Book Now</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('bookNowBtn').addEventListener('click', function() {
            window.location.href = 'booking.php';
        });
    </script>
</body>
</html>
