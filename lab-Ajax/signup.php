
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Signup</title>
</head>
<body>
<?php include 'nav.php' ?>
    <div class = "container">
        <div class = "form-container">
            <h2>SignUp</h2>
            <form method="POST" action="../controller/signupCheck.php"  onsubmit="return signupValidate()">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" name="confirmpassword" id="confirmpassword">
                <input type="submit" name="signup" value="signup" onclick="ajax()" />
            </form>
            <a href="login.php">Login</a>
        </div>
    </div>  
    <script src="script.js"> </script>  
</body>
</html>
