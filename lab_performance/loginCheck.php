<?php

require 'config.php';
session_start();

if (!empty($_SESSION["usertype"])) {
    if ($_SESSION["usertype"] == "admin") {
        header("Location: welcome(admin).php");
        exit;
    } elseif ($_SESSION["usertype"] == "user") {
        header("Location: welcome(user).php");
        exit;
    }
}


if (isset($_POST['login'])) {
    $userid = $_POST['userid'];
    $password = $_POST["password"];
    $rememberMe = isset($_POST['rememberme']);

    if (isset($_POST['login'])) {
        $userid = $_POST['userid'];
        $password = $_POST["password"];
    
        if($userid == "" ) {
            echo "Username is required </br>";
        } 
        if(strlen($userid) < 6){
            echo 'Username Must Be Atleast 6 Characters <br>';
            exit;
        } 

        if($password == "") {
            echo "Password is required </br>";
            exit;
        } else {
            $result = mysqli_query($conn, "SELECT * FROM user_info WHERE id = '$userid' AND password = '$password'");
        
            if (mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                $_SESSION["login"] = true;
                $_SESSION['userid'] = $user['id'];
                $_SESSION['username'] = $user['name'];
                $_SESSION['usertype'] = $user['usertype'];

                if ($user['usertype'] == 'admin') {
                    header('Location: welcome(admin).php');
                } elseif ($user['usertype'] == 'user') {
                    header('Location: welcome(user).php');
                } else {
                    echo "Invalid user type.";
                } 
                exit;
            } else {
                echo "Incorrect username or password.";
            }
        }
    }
}
?>
