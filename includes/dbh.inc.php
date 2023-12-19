
<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "clinic";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $connection;
}

function CloseCon($connection)
{
    $connection->close();
}
?>