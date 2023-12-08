<?php
function InsertUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once "../db/dbh.inc.php";
        $user_type=1;
        $name = htmlspecialchars($_POST["Full_Name"]);
        $age = htmlspecialchars($_POST["Age"]);
        $email = htmlspecialchars($_POST["Email"]);
        $address = htmlspecialchars($_POST["Address"]);
        $password = htmlspecialchars($_POST["Password"]);

        $sqle = "SELECT * FROM patient WHERE email='$email'";
        $result = $connection->query($sqle);

        if ($result->num_rows == 1) {
            echo "User Already Exists";
        } else {

            $sql = "INSERT INTO patient (user_type,name, age, email, address, password) VALUES ('$user_type','$name', '$age', '$email', '$address', '$password')";

            if ($connection->query($sql) === TRUE) {
                header("Location:../view/index.php");
            } else {
                echo "Error: " . $connection->error;
            }

            $connection->close();
        }
    }
}

function FindUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        include_once "../db/dbh.inc.php";
        $email = htmlspecialchars($_POST["email"]);
        $password = $_POST["password"];

        $sql = "SELECT * FROM patient WHERE email='$email'";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            if ($password == $row['password']) {
                $_SESSION["ID"] = $row["id"];
                $_SESSION["Name"] = $row["name"];
                $_SESSION["Age"] = $row["age"];
                $_SESSION["Address"] = $row["address"];
                $_SESSION["Password"] = $row["password"];
                $_SESSION["Email"] = $row["email"];
                var_dump($_SESSION);
                header("Location:../view/profile.php");
            } else {
                echo "Incorrect Password";
            }
        } else {
            echo "User not Found";
        }
        $connection->close();
    }
}

function UpdateUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        include_once "../db/dbh.inc.php";

        $userID = $_SESSION["ID"];

       
        $name = htmlspecialchars($_POST["Firstname"]);
        $age = htmlspecialchars($_POST["Age"]);
        $email = htmlspecialchars($_POST["email"]);
        $address = htmlspecialchars($_POST["address"]);
        $password = htmlspecialchars($_POST["pas"]);

        $sql = "UPDATE patient SET name='$name', age='$age', email='$email', address='$address', password='$password' WHERE id='$userID'";

        if ($connection->query($sql) === TRUE) {
            $_SESSION["Name"] = $name;
            $_SESSION["Age"] = $age;
            $_SESSION["Address"] = $address;
            $_SESSION["Password"] = $password;
            $_SESSION["Email"] = $email;

            header("Location:../view/profile.php");
        } else {
            echo "Error updating record: " . $connection->error;
        }

        $connection->close();
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];
        if ($action === "InsertUser") {
            insertUser();
        } elseif ($action === "FindUser") {
            FindUser();
        }elseif ($action === "UpdateUser") {
            UpdateUser();
        }else {
            echo "Invalid action";
        }
    }
}
?>