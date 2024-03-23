
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
   <fieldset>
    <legend>SignUp</legend>
    <form method="POST" action="regCheck.php">
        <label for="id">Id:</label><br>
        <input type="id" name="id" id="id"><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br>
        <label for="password">Confirm password:</label><br>
        <input type="password" name="confirmpassword" id="confirmpassword"><br>
        <label for="name">Name:</label><br>
        <input type="name" name="name" id="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="user">User Type:</label><br>
        <select type ="usertype" name ="usertype"><br>
            <option value="admin"> Admin </option>
            <option value="user"> User </option>
        </select><br></br>
        <input type="submit" name="register" value="register">
    </form><br>
    <a href="login.php">Login</a>
</fieldset>
</body>
</html>
