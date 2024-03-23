<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
    <body>
    <?php
        session_start();

        if (isset($_SESSION['username'])) {
            echo "<h1>Welcome " . htmlspecialchars($_SESSION['username']) . "!</h1>";
        }
    ?>
        <a class="nav-link active" aria-current="page" href="profile.php">Profile</a><br>
        <a class="nav-link active" aria-current="page" href="changepass.php">Change password</a><br>
        <a class="nav-link active" aria-current="page" href="logout.php">Logout</a><br>
    </body>
</html>