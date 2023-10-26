<?php
include "../includes/dbh.inc.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `user` WHERE `id` = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['update_user'])) {
    if (isset($_GET['id_new'])) {
        $idnew = $_GET['id_new'];
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Age = $_POST['age'];
    $Address = $_POST['Address'];

    $query = "UPDATE `user` SET `name`='$name', `Email`='$email', `password`='$password', `age`='$Age', `Address`='$Address' WHERE `id`='$idnew'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    } else {
        header('location:dashboard.php?update_msg=you have successfully updated the data .');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
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
        input[type="password"],
        input[type="number"] {
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
    </style>
</head>

<body>
<div class="container">
    <h1>Edit patient</h1>
    <form action="updatepatient.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Name" value="<?php echo $row['name']; ?>">
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
            <label for="age">Age</label>
            <input type="number" id="age" name="age" required placeholder="Age" value="<?php echo $row['age']; ?>">
            <span id="AgeErrorMessage" class="error-message"></span>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" required placeholder="Address" value="<?php echo $row['Address']; ?>">
            <span id="AddressErrorMessage" class="error-message"></span>
        </div>
        <div class="form-group">
            <input type="submit" class="submit-button" name="update_user" value="UPDATE">
        </div>
    </form>
</div>

</body>

</html>
