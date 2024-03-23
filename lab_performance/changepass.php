<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <fieldste>
    <form method="post" action="changepassController.php">
        <legend><b>CHANGE PASSWORD</b></legend>
        Current Password: <input type="password" name="currentPassword" value=""> <br></br>
        New Password: <input type="password" name="newPassword" value="newPassword"> <br></br>
        Retype New Password: <input type="retypePassword" name="retypePassword" value=""><br></br>
        <hr>
        <input type="submit" name="submit" value="submit">
    </form>
    <a href="gohomeController.php">Home</a>
</fieldset>
</body>
</html>