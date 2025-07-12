<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $adminEmail = "admin@admin.com";  // Replace with DB check if needed
    $adminPassword = "admin123";

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $adminEmail && $password === $adminPassword) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php");
    } else {
        $error = "Invalid credentials";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background: linear-gradient(to right, #bdc3c7, #2c3e50);
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            width: 350px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 10px 10px 10px 35px;
            border: none;
            border-bottom: 2px solid #ccc;
            background: none;
            outline: none;
        }

        .form-group i {
            position: absolute;
            top: 10px;
            left: 8px;
            color: #555;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #7a74f2;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #5e5bcf;
        }

        .error-msg {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body style="background-image: url('background.jpg');background-size:cover">
    <form class="login-container" method="POST">
        <h2>Admin Sign In</h2>
        <?php if (!empty($error)) echo "<div class='error-msg'>$error</div>"; ?>
        <div class="form-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button class="login-btn" type="submit">Sign In</button>
    </form>
</body>
</html>
