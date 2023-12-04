<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "clinic";

$connection = mysqli_connect($servername,$username,$password,$DB);


if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}

?>