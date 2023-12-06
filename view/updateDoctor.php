<?php
include "../includes/dbh.inc.php";
?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `doctor` WHERE `id` = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
?>
<?php
if (isset($_POST['update_doctor'])) {
    if (isset($_GET['id_new'])) {
        $idnew = $_GET['id_new'];
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $specialty = $_POST['specialty'];
    $universityName = $_POST['universityName'];

    $query = "UPDATE `doctor` SET `Name`='$name', `Email`='$email', `password`='$password', `specialty`='$specialty', `university_name`='$universityName' WHERE `id`='$idnew'";


    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    } else {
        header('location:readDoctor.php?update_msg=you have successfully updated the data .');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin: 10px 0;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error-message {
            color: red;
            font-size: 12px;
        }

        .submit-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }
        .back-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .back-button:hover {
        background-color: #0056b3;
    }

    </style>
</head>

<body>
<a href="dashboard.php" class="back-button">Back</a>
    <div class="container">
        <h1>Edit Doctor</h1>
        <form action="updateDoctor.php?id_new=  <?php echo $id; ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Name" value="<?php echo $row['Name']; ?>">
                <span id="nameErrorMessage" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="Email" value="<?php echo $row['Email']; ?>">
                <span id="emailErrorMessage" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Password" value="<?php echo htmlspecialchars($row['password']); ?>">
                <span id="passwordErrorMessage" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="specialty">Specialty</label>
                <input type="text" id="specialty" name="specialty" required placeholder="Specialty" value="<?php echo $row['specialty']; ?>">
                <span id="specialtyErrorMessage" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="universityName">University Name</label>
                <input type="text" id="universityName" name="universityName" required placeholder="University Name" value="<?php echo $row['university_name']; ?>">
                <span id="universityNameErrorMessage" class="error-message"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="submit-button" name="update_doctor" value="UPDATE">
            </div>
        </form>
    </div>
</body>

</html>