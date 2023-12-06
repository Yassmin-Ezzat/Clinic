<?php
include "../includes/dbh.inc.php";

if (isset($_GET["id"])) {
    $id = mysqli_real_escape_string($connection, $_GET["id"]);

    $query = "DELETE FROM `nurse` WHERE `id`='$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        error_log("MySQL Error: " . mysqli_error($connection));
        die("Failed to delete the record. Please try again.");
    } else {
        header('Location: readnurse.php?delete_msg=Record deleted successfully.');
        exit();
    }
}
?>
