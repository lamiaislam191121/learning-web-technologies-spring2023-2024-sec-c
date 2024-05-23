<?php
require '../model/config.php';

if (isset($_COOKIE['rememberMe'])) {
    header("location: ../view/welcome.php");
    exit;
}
if (!empty($_SESSION["id"])) {
    header("location: ../view/welcome.php");
    exit;
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST["password"];
    $rememberMe = isset($_POST['rememberme']);

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST["password"];
    
        if($username == "" ) {
            echo "Username is required </br>";
        } 
        if(strlen($username) < 2){
            echo 'Username Must Be Atleast 2 Characters <br>';
        } else {
            $username = htmlspecialchars($username);
            $isValid = true;
            for ($i = 0; $i < strlen($username); $i++) {
                $char = $username[$i];
                if (!ctype_alpha($char)) { 
                    $isValid = false;
                    break;
                }
            }
            if (!$isValid) {
                echo "Username should contain only upper case and lower case characters </br>";
            }
        }
        if($password == "") {
            echo "Password is required </br>";
            exit;
        } else {
            if (mysqli_num_rows($result) > 0) {
                $_SESSION["login"] = true;
                $_SESSION["name"] = $username;
                if ($rememberMe) {
                    setcookie('rememberMe', $username, time() + 1800, "/");
                }
                header("location: ../view/welcome.php"); 
                exit;
            } else {
                echo "Incorrect username or password.";
            }
        }
    }
}
?>
