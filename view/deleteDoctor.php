<?php
include "../includes/dbh.inc.php";
?>


<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $query = "DELETE FROM 'doctor' WHERE 'id'='$id'";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("".mysqli_error($connection));
    }else{
        header('location:readdoctor.php?delete_msg=you have deleted the record.');
    }
} 
?>