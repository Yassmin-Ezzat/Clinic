<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../public/css/sidebar.css">

</head>

<body>
    <div class="navigation">
        <ul>
            <li>
                <a href="../view/index.php">
                    <span class="icon">
                        <ion-icon name="logo.png"></ion-icon>
                    </span>
                    <span class="title">ICare</span>
                </a>
            </li>
            <li>
                <a href="../view/index.php">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="../view/dashboard.php">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="../view/adddoctor.php">
                    <span class="icon">
                        <ion-icon name="add-outline"></ion-icon>
                    </span>
                    <span class="title">Add Doctors</span>
                </a>
            </li>
            <li>
                <a href="readDoctor.php">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Doctors</span>
                </a>
            </li>
            <li>
                <a href="addpatient.php">
                    <span class="icon">
                        <ion-icon name="add-outline"></ion-icon>
                    </span>
                    <span class="title">Add Patient</span>
                </a>
            </li>

            <li>
                <a href="readpatient.php">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Patients</span>
                </a>
            </li>



            <li>
                <a href="addnurse.php">
                    <span class="icon">
                        <ion-icon name="add-outline"></ion-icon>
                    </span>
                    <span class="title">Add Nurse</span>
                </a>
            </li>

            <li>
                <a href="readnurse.php">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Nurses</span>
                </a>
            </li>

            <li>
                <a href="logIn.php">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="user">
            <h2>hi,admin</h2>
        </div>
    </div>
    <script src="../public/js/dashboard.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>