<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600&family=Poppins:wght@300;400;500;600;700&family=Rampart+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../public/css/style.css">
    <title>Clinic</title>
</head>

<body>
    <div class="navbar">
        <div class="col-1">

            <a href="index.php"><img id="logo" src="../public/images/logo.png" alt="Random Clinic Logo"></a>

        </div>
        <div class="col-2">
            <ul class="nav" id="nav-1">
                <li><a href="../view/index.php" class="active">Home</a></li>
                <li><a href="../view/dashboard.php">Dashboard</a></li>
                <li><a href="../view/Specialties.php">Specialities</a></li>
                <li><a href="../view/about.php">About Us</a></li>
                <li><a href="../view/ourTeam.php">Our Team</a></li>
            </ul>
        </div>

        <div class="col-3">

            <a href="logIn.php"> <i id="person" class="fa-regular fa-user fa-lg" style="color: #1f1fb8; margin-top: 7%;"></i></a>

            <button id="call"> Call 15262</button>

            <i id="person1" class="fa-regular fa-user fa-md" style="color: #1f1fb8; margin-top: 7%; "></i>

            <button id="open" class="side-btn"><i id="bars" onclick="openNavbar()" class="fa-solid fa-bars" style="color: #1f1fb8;"></i></button>

            <button id="close" class="side-btn"><i class="fa-solid fa-xmark" style="color: #1f1fb8;" onclick="closeNavbar()"></i></button>

        </div>

    </div>
    <div id="verNav">

        <ul class="nav1" id="nav-1" style=" padding: 3%; margin-top: 15%;">

            <li><a href="../view/index.php" class="active">Home</a></li>
            <li><a href="../view/Specialties.php">Specialities</a></li>
            <li><a href="../view/about.php">About Us</a></li>
            <li><a href="../view/ourTeam.php">Our Team</a></li>

        </ul>

    </div>

</body>
<script src="../public/js/script.js"></script>

</html>