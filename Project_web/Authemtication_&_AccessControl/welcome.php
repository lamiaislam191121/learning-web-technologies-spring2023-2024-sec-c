<?php 
    session_start();

    if(!isset($_SESSION['flag'])){

        header('location: login.php');

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome Home! <?php echo $_SESSION['username'];?></h1>
</body>
</html>