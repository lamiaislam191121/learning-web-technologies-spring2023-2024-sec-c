<?php
require_once '../model/usermodel.php';
session_start();

if (isset($_POST["signup"])) {
    // //$name = $_POST["name"];
    // $email = $_POST["email"];
    // $username = $_POST["username"];
    // $password = $_POST["password"];
    // $confirmpassword = $_POST["confirmpassword"];

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $confirmpassword = $_REQUEST["confirmpassword"];

    if (empty($name) OR empty($email) OR empty($username) OR empty($password) OR empty($confirmpassword)) {
        echo "All fields are required </br>";
    }
    if (empty($name)) {
        echo "Please Enter your Full Name </br>";
    }

    
    if (empty($email)) {
        echo "Email is required </br>";
    }
    if(!str_contains($email, '@') && !str_contains($email, '.')){
        echo "Email Must Be Valid </br>";
    }

    if (empty($username)) {
        echo "username is required </br>";
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

    if(strlen($password) < 4){
        echo "Password Must Be Atleast 4 Characters </br>";
    }
    if(!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '.') && !str_contains($password, '%')){
        echo "Password Must Contain @, #, $, . or % </br>" ;
    }

    if ($password != $confirmpassword) {
        echo "Password does not match";
    } else {
        $duplicate = duplicateCheck($username, $email);
        if ($duplicate > 0) {
            echo "Username or email has already been taken";
        } else {
            $result = signupCheck($name, $email, $username, $password);
            if ($result) {
                echo "Signup Successful";
                $_SESSION["login"] = true;
                header("location: ../controller/logout.php");
            } else {
                echo "connection error";
            }
        }
    }
}
?>