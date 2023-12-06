<?php
function adddoctor()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once "../includes/dbh.inc.php";

        $Name = htmlspecialchars($_POST["name"]);
        $specialty = htmlspecialchars($_POST["specialty"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);
        $university_name = htmlspecialchars($_POST["university_name"]);
        $sqle = "SELECT * FROM doctor WHERE email='$email'";
        $result = $connection->query($sqle);

        if ($result->num_rows == 1) {
            echo "User Already Exists";
        } else {

            $sql = "INSERT INTO doctor (name, specialty, email,password,university_name) VALUES ('$Name', '$specialty','$email', '$password','$university_name')";

            if ($connection->query($sql) === TRUE) {
                header("Location:../php/dashboard.php");
            } else {
                echo "Error: " . $connection->error;
            }

            $connection->close();
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];
        if ($action === "adddoctor") {
            adddoctor();
        } else {
            echo "Invalid action";
        }
    }
}
