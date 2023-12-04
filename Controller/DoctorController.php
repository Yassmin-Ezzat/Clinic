<?php

include "../Model/Doctor.php";
class doctorcontroller
{
    public static function getall()
    {
        include "../includes/dbh.inc.php";

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = Doctor::getdoctor($id);
            if (!$result) {
                die("Query failed: " . mysqli_error($connection));
            } else {
                $row = mysqli_fetch_assoc($result);
                return $row;
            }
        }
    }
    public static function updatedoctor()
    {
        include "../includes/dbh.inc.php";
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
    }
}
