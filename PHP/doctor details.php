<!DOCTYPE html>
<html>
<head>
    <title>Doctor Details</title>
    <link rel="stylesheet"  href="../css/doctor details.css">
</head>
<body>
    <h1>Doctor Details</h1>
    <?php
    //doctor details
    $doctors = [
        [
            'name' => 'Dr. Magdi Yacoub',
            'specialty' => 'Cardiology',
            'schedule' => ['Monday' => ['Select', '9:00 AM', '10:00 AM', '11:00 AM'],
            ],
            'clinic' => 'icare Clinic',
            'contact' => '01234567890',
            'email' => 'MagdiYacoub@gmail.com',
        ],
        [
            'name' => 'Dr. Muneeb Shah',
            'specialty' => 'Dermatology',
            'schedule' => ['Thursday' => ['Select', '2:00 PM', '3:00 PM', '4:00 PM'],
            ],
            'clinic' => 'icare Clinic',
            'contact' => '01123456780',
            'email' => 'MuneebShah@gmail.com',
        ],
    ];

    // Display dr.det
    foreach ($doctors as $doctor) {
        echo '<div class="doctor">';
        echo '<h2>' . $doctor['name'] . '</h2>';
        echo '<p><strong>Specialty:</strong> ' . $doctor['specialty'] . '</p>';
        echo '<p><strong>Clinic:</strong> ' . $doctor['clinic'] . '</p>';
        echo '<p><strong>Contact:</strong> ' . $doctor['contact'] . '</p>';
        echo '<p><strong>Email:</strong> ' . $doctor['email'] . '</p>';
        echo '<h3>Schedule:</h3>';
        echo '<ul>';
        foreach ($doctor['schedule'] as $day => $times) {
            echo '<li><strong>' . $day . ':</strong>';
            echo '<select>';
            foreach ($times as $time) {
                echo '<option value="' . $time . '">' . $time . '</option>';
            }
            echo '</select>';
            echo '</li>';
        }
        echo '</ul>';
        echo '<a href="book.php?doctor=' . urlencode($doctor['name']) . '">Book Now</a>';
        echo '</div>';
    }
    ?>
</body>
</html>