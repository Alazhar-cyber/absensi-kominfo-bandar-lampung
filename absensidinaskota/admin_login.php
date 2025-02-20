<admin_login.php html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #57b8e9;
        }

        .login-container {
            background: rgb(231, 233, 234);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            padding: 20px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .login-container label {
            display: block;
            text-align: left;
            font-size: 14px;
            margin-bottom: 5px;
            color: #333;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .login-container input[type="checkbox"] {
            margin-right: 10px;
        }

        .login-container .remember-me {
            text-align: left;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        .login-container .register-link {
            margin-top: 10px;
            font-size: 14px;
            color: #333;
        }

        .login-container .register-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .login-container .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login_Admin</h2>
        <form action="login_process.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
            
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Ingat saya</label>
            </div>
            
            <a href="data.php">
                        <span>&#128100;</span> Login Admin
                    </a>
        </form>
        <div class="register-link">
            <p>Kalau belum daftar silahkan daftar dulu ya <a href="register.php">Daftar</a></p>
        </div>
    </div>
</body>
</html>
