<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <fieldset>
    <legend>Login</legend>
    <form method="POST" action="loginCheck.php">
        <label for="userid">User ID:</label><br>
        <input type="text" id="userid" name="userid"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="checkbox" id="rememberMe" name="rememberme">
        <label for="rememberMe">Remember Me</label><br>
        <input type="submit" name="login" value="Login">
        <a href="registration.php">register</a>
    </form>
    
</fieldset>
</body>
</html>
