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

function adduser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once "../includes/dbh.inc.php";

        $Name = htmlspecialchars($_POST["name"]);
        $age = htmlspecialchars($_POST["Age"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);
        $address = htmlspecialchars($_POST["address"]);

        $sqle = "SELECT * FROM user WHERE email='$email'";
        $result = $connection->query($sqle);
        if ($result->num_rows == 1) {
            echo "User Already Exists";
        } else {


            $sql = "INSERT INTO user (name, Age, email,password,address) VALUES ('$Name', '$age','$email', '$password','$address')";

            if ($connection->query($sql) === TRUE) {
                header("Location:../php/dashboard.php");
            } else {
                echo "Error: " . $connection->error;
            }

            $connection->close();
        }
    }
}

function addnurse(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once "../includes/dbh.inc.php";

        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        $sqle = "SELECT * FROM nurse WHERE email='$email'";
        $result = $connection->query($sqle);
        
        if ($result->num_rows == 1) {
            echo "User Already Exists";
        } else {
            $sql = "INSERT INTO nurse (Name, Email, password) VALUES ('$name', '$email', '$password')";

            if ($connection->query($sql) === TRUE) {
                header("Location:../php/dashboard.php");
            } else {
                echo "Error: " . $connection->error;
            }

            $connection->close();
        }
    }
}


function InsertUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once "../includes/dbh.inc.php";

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
                header("Location:../PHP/index.php");
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
        include_once "../includes/dbh.inc.php";
        $email = mysqli_real_escape_string($connection, $_POST["email"]);
        $password = $_POST["password"];

        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();

            if ($password == $row['password']) {
                $_SESSION["ID"] = $row["ID"];
                $_SESSION["LName"] = $row["lastname"];
                $_SESSION["FName"] = $row["firstname"];
                $_SESSION["Password"] = $row["password"];
                $_SESSION["Email"] = $row["email"];

                var_dump($_SESSION);
                header("Location:../php/index.php");
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
        } elseif ($action === "adduser") {
            adduser();
        } else if ($action === "adddoctor") {
            adddoctor();
        }else if($action === "addnurse"){
            addnurse();
        }else {
            echo "Invalid action";
        }
    }
}
