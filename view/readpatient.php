<?php
include "../db/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Patients</title>
</head>

<body>
    <h2>All Patients</h2>
    <a href="dashboard.php" class="back-button">Back</a>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT id, Name, Email FROM patient";
            $result = mysqli_query($connection, $query);
            if (!$result) {
                die("Query failed: " . mysqli_error($connection));
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td><a href='updatepatient.php?id=" . $row['id'] . "' class='edit-button'>Edit</a></td>";
                    echo "<td><a href='deleteUser.php?id=" . $row['id'] . "' class='delete-button'>Delete</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        margin: 20px 0;
    }

    table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
    }

    thead {
        background-color: #007BFF;
        color: white;
    }

    /* Style the "Back" button */
    .back-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .back-button:hover {
        background-color: #0056b3;
    }

    /* Style the "Edit" button */
    .edit-button {
        display: inline-block;
        padding: 5px 10px;
        background-color: #5cb85c; /* Green color */
        color: white;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
        transition: background-color 0.3s;
    }

    .edit-button:hover {
        background-color: #449d44; /* Darker green color on hover */
    }

    /* Style the "Delete" button */
    .delete-button {
        display: inline-block;
        padding: 5px 10px;
        background-color: #d9534f; /* Red color */
        color: white;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .delete-button:hover {
        background-color: #c9302c; /* Darker red color on hover */
    }
</style>
