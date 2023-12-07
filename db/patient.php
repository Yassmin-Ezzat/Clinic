<?php
function InsertUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once "../db/dbh.inc.php";

        $name = htmlspecialchars($_POST["Full_Name"]);
        $age = htmlspecialchars($_POST["Age"]);
        $email = htmlspecialchars($_POST["Email"]);
        $address = htmlspecialchars($_POST["Address"]);
        $password = htmlspecialchars($_POST["Password"]);

        $sqle = "SELECT * FROM user WHERE email='$email'";
        $result = $connection->query($sqle);

        if ($result->num_rows == 1) {
            echo "User Already Exists";
        } else {

            $sql = "INSERT INTO user (name, age, Email, Address, password) VALUES ('$name', '$age', '$email', '$address', '$password')";

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

        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            if ($password == $row['password']) {
                $_SESSION["ID"] = $row["id"];
                $_SESSION["Name"] = $row["name"];
                $_SESSION["Age"] = $row["age"];
                $_SESSION["Address"] = $row["Address"];
                $_SESSION["Password"] = $row["password"];
                $_SESSION["Email"] = $row["Email"];
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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];
        if ($action === "InsertUser") {
            insertUser();
        } elseif ($action === "FindUser") {
            FindUser();
        }else {
            echo "Invalid action";
        }
    }
}
?>