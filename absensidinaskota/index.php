<?php
    include 'koneksi.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #56ccf2, #2f80ed);
        }

        .login-container {
            text-align: center;
            background: white;
            border-radius: 20px;
            padding: 20px 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }

        .login-container img {
            width: 150px;
            margin-bottom: 10px;
        }

        .login-container .text-below-logo {
            font-size: 14px;
            color: #333;
            margin-bottom: 20px;
        }

        .login-container table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .login-container table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .login-container table td a {
            display: block;
            padding: 10px;
            border: 2px solid #2f80ed;
            border-radius: 30px;
            background: transparent;
            color: #2f80ed;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s, color 0.3s;
        }

        .login-container table td a:hover {
            background: #2f80ed;
            color: rgb(93, 166, 230);
        }

        .login-container .forgot-password {
            margin-top: 10px;
            font-size: 14px;
            color: #2f80ed;
            text-decoration: none;
            display: inline-block;
        }

        .login-container .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="img/imag2..png" alt="Logo Komendigi">
        <div class="text-below-logo">Kementerian Komunikasi dan Digital Bandar Lampung</div>
        <table>
            <tr>
                <td>
                    <a href="admin_login.php">
                        <span>&#128100;</span> Login Admin
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="user_login.php">
                        <span>&#128100;</span> Login User
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="register.php">
                        <span>&#128100;</span> Register
                    </a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
