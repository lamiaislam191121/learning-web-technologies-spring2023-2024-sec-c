<?php
session_start();
require 'config.php';

if (isset($_POST["register"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $usertype = $_POST["usertype"];

    $errors = array();

    if (empty($id) OR empty($name) OR empty($email) OR empty($password) OR empty($confirmpassword)) {
        array_push($errors, "All fields are required");
    }
    if (empty($id)) {
        array_push($errors, "Please Enter your ID");
    }
    if (empty($name)) {
        array_push($errors, "Please Enter your Full Name");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }

    // validation for email
    if(!str_contains($email, '@') && !str_contains($email, '.')){
        array_push($errors, "Email Must Be Valid");
    }

    if(strlen($password) < 4){
        array_push($errors, "Password Must Be Atleast 4 Characters");
    }
    if(!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '.') && !str_contains($password, '%')){
        array_push($errors, "Password Must Contain @, #, $, . or %");
    }

    if ($password != $confirmpassword) {
        array_push($errors,"Password does not match");
    }
    if (count($errors) > 0) {
        foreach($errors as $error)
        echo "<div class='alert alert-danger'>$error</div>";
    } else {
        $duplicate = mysqli_query($conn, "SELECT * FROM user_info WHERE id = '$id' OR email = '$email'");
        if (mysqli_num_rows($duplicate) > 0) {
            echo "<script> alert('ID or username or email has already been taken'); </script>";
        } else {
            $result = "INSERT INTO user_info (id, name, email, password, usertype) VALUES ('$id', '$name', '$email', '$password', '$usertype')";
            if (mysqli_query($conn, $result)) {
                echo "<script> alert('Signup Successful'); </script>";
                $_SESSION["reg"] = true;
                header("location: login.php");
            } else {
                echo "<script> alert('Error: " . mysqli_error($conn) . "'); </script>";
            }
        }
    }
}

?>