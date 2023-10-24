<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="adduser.css">
</head>

<body>

    <div class="container">
        <div class="top-form">
            <h1 class="form-heading">Create New Account for User</h1>
            <form id="signupForm" method="POST" action="../includes/user.php">
                <table class="custom-table">
                    <input type="hidden" name="action" value="adduser">
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td><input type="text" id="signupName" name="name" required placeholder="Enter Name"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email Address</label></td>
                        <td><input type="email" id="signupEmail" name="email" required placeholder="Enter email"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="password" id="signupPassword" name="password" required placeholder="Enter Password"></td>
                    </tr>
                    <tr>
                        <td><label for="confirmPassword">Confirm Password</label></td>
                        <td><input type="password" id="signupConfirmPassword" required placeholder="Confirm Password"></td>
                    </tr>
                </table>
                <div class="form-group">
                    <button type="submit" class="custom-button">Create</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php
include '../PHP/dashboard.php';
?>

</html>

<style>
    .container {
        text-align: center;
    }

    .custom-table {
        width: 100%;
        max-width: 400px;
        /* margin: 0 auto; */
        border-spacing: 10px;
        /* Adjust the spacing between cells */
    }

    .custom-table td {
        padding: 5px;
    }

    .custom-table input {
        width: 100%;
        height: 30px;
        border: 1px solid #ddd;
        /* padding: 5px; */
    }

    .custom-table input:focus {
        box-shadow: 0 0 4px rgba(255, 0, 0, 0.5);
    }
</style>