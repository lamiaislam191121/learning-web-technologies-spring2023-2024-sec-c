<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style.css" />
    <title>Change Password</title>
</head>
<body>
<?php include 'nav.php' ?>
    <div class = "container">
        <div class = "form-container">
            <h2>Change Password</h2>
            <form method="post" action="../controller/changpassCheck.php"  onsubmit="return chngpassValidate()">
                <label for="currentPassword">Current Password</label>
                <input type="password" id="currentPassword" name="currentPassword" value="">
                <label for="newPassword">New Password</label>
                <input type="password" id="newPassword" name="newPassword" value="">
                <label for="retypePassword">Confirm Password</label>
                <input type="password" id="retypePassword" name="retypePassword" value="">
                <input type="submit" name="submit" value="confirm">
                <a href="welcome.php">Cancel</a>
            </form>
        </div>
    </div>
    <script src="../asset/script.js"></script>
</body>
</html>