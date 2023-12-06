<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin: 10px 0;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error-message {
            color: red;
            font-size: 12px;
        }

        .submit-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }

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
    </style>
</head>

<body>
    <a href="dashboard.php" class="back-button">Back</a>
    <div class="container">
        <h2>Add Patient</h2>
        <form id="registrationForm" method="POST" action="../includes/admin.php">
            <input type="hidden" name="action" value="adduser">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter Name">
                <span id="nameErrorMessage" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="Age">Age</label>
                <input type="number" id="Age" name="Age" required placeholder="Enter Age">
                <span id="AgeErrorMessage" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="Enter Email">
                <span id="emailErrorMessage" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required placeholder="Enter Address">
                <span id="addressErrorMessage" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Enter Password">
                <span id="passwordErrorMessage" class="error-message"></span>
            </div>

            <div class="form-group">
                <button type="submit" class="submit-button">Add</button>
            </div>
        </form>
    </div>

    <script>
        const registrationForm = document.getElementById('registrationForm');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const AgeInput = document.getElementById('Age');
        const addressInput = document.getElementById('address');

        registrationForm.addEventListener('submit', function(event) {
            if (!isFormValid()) {
                event.preventDefault();
            }
        });

        function isFormValid() {
            let isValid = true;

            if (!validateName(nameInput.value)) {
                isValid = false;
            }

            if (!validateEmail(emailInput.value)) {
                isValid = false;
            }

            if (!validatePassword(passwordInput.value)) {
                isValid = false;
            }

            if (!validateAge(AgeInput.value)) {
                isValid = false;
            }

            if (!validateAddress(addressInput.value)) {
                isValid = false;
            }

            return isValid;
        }

        function validateName(name) {
            const nameRegex = /^[A-Za-z ]+$/;
            const nameErrorMessage = document.getElementById('nameErrorMessage');
            if (!nameRegex.test(name)) {
                nameErrorMessage.textContent = 'Name must contain only alphabetical characters.';
                return false;
            } else {
                nameErrorMessage.textContent = '';
                return true;
            }
        }

        function validateEmail(email) {
            const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
            const emailErrorMessage = document.getElementById('emailErrorMessage');
            if (!emailRegex.test(email)) {
                emailErrorMessage.textContent = 'Invalid email address.';
                return false;
            } else {
                emailErrorMessage.textContent = '';
                return true;
            }
        }

        function validatePassword(password) {
            const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            const passwordErrorMessage = document.getElementById('passwordErrorMessage');
            if (!passwordRegex.test(password)) {
                passwordErrorMessage.textContent = 'Password must be at least 8 characters long and contain at least one letter and one digit.';
                return false;
            } else {
                passwordErrorMessage.textContent = '';
                return true;
            }
        }

        function validateAge(age) {
            if (isNaN(age) || age < 0) {
                const AgeErrorMessage = document.getElementById('AgeErrorMessage');
                AgeErrorMessage.textContent = 'Age must be a positive number.';
                return false;
            } else {
                return true;
            }
        }

        function validateAddress(address) {
            if (address.trim() === '') {
                const addressErrorMessage = document.getElementById('addressErrorMessage');
                addressErrorMessage.textContent = 'Address cannot be empty.';
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>
