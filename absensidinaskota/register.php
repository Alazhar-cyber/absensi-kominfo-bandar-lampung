<register.html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration-container {
            background-color: #e6eef1;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #555555;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        button {
            background-color:rgb(107, 166, 235);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color:rgb(56, 122, 175);
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .success-message {
            color: green;
            
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2>User Registration</h2>
        <div id="message"></div>
        <form id="registrationForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <button type="submit">Register</button>
        </form>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const messageDiv = document.getElementById('message');

            messageDiv.innerHTML = '';

            if (password !== confirmPassword) {
                messageDiv.innerHTML = '<div class="error-message">Passwords do not match!</div>';
                return;
            }

            if (password.length < 6) {
                messageDiv.innerHTML = '<div class="error-message">Password must be at least 6 characters long!</div>';
                return;
            }

            messageDiv.innerHTML = '<div class="success-message">Registration successful!</div>';

            // Here you can add further actions, e.g., sending the data to a server
        });
    </script>
</body>
</html>
