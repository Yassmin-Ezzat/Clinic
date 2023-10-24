<?php




function adduser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once "../includes/dbh.inc.php";

        $Name = htmlspecialchars($_POST["fname"]);
        $lastname = htmlspecialchars($_POST["lname"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        $sqle = "SELECT * FROM user WHERE email='$email'";
        $result = $connection->query($sqle);



        $sql = "INSERT INTO user (firstname, lastname, email,password) VALUES ('$firstname', '$lastname','$email', '$password')";

        if ($connection->query($sql) === TRUE) {
            header("Location:../php/index.php");
        } else {
            echo "Error: " . $connection->error;
        }

        $connection->close();
    }
}
function InsertUser()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once "../includes/dbh.inc.php";

        $firstname = htmlspecialchars($_POST["Firstname"]);
        $lastname = htmlspecialchars($_POST["lastname"]);
        $email = htmlspecialchars($_POST["email"]);
        $address = htmlspecialchars($_POST["address"]);
        $password = htmlspecialchars($_POST["password"]);

        $sqle = "SELECT * FROM user WHERE email='$email'";
        $result = $connection->query($sqle);

        if ($result->num_rows == 1) {
            echo "User Already Exists";
        } else {

            $sql = "INSERT INTO user (First_Name, Last_Name, Email, Address, password) VALUES ('$firstname', '$lastname', '$email', '$address', '$password')";

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
        include_once "../includes/dbh.inc.php"; // Include your database connection
        //prevent SQL injection using mysqli_real_escape_string
        $email = mysqli_real_escape_string($connection, $_POST["email"]);
        $password = $_POST["password"];

        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            //fetch_assoc() If a single user is found, this line fetches the user's data as an associative array
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
        }elseif($action==="adduser"){
            adduser();
        } else {
            echo "Invalid action";
        }
    }
}
