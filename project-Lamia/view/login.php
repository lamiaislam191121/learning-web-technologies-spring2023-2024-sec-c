<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style.css" />
    <title>Login</title>
</head>
<body>
<?php include 'nav.php' ?>
    <div class = "container">
        <div class = "form-container">
            <h2>Login</h2>
            <form method="POST" action="../controller/loginControl.php" onsubmit="return loginValidate()">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <div class="remember-me">
                    <label for="rememberMe">Remember Me</label>
                    <input type="checkbox" id="rememberMe" name="rememberme">
                </div>
                <input type="submit" name="login" value="Login">
                <a href="forgot_password.php">Forgot Password?</a>
            </form>
            <a href="signup.php">Signup</a>
        </div>
    </div>  
    <script src="../asset/script.js"> </script>  
</body>
</html>
