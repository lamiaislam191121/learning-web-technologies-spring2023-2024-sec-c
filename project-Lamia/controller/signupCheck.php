<?php
require_once '../model/usermodel.php';
session_start();


if (isset($_POST["signup"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $name = $_REQUEST["name"];
   $email = $_REQUEST["email"];
    $gender = $_REQUEST["gender"];
    $dob = $_REQUEST["dob"];
    $username = $_REQUEST["username"];
    $usertype = $_REQUEST["usertype"];
    $password = $_REQUEST["password"];
    $confirmpassword = $_REQUEST["confirmpassword"];

    //$json = file_get_contents('php://input');
    //$json = file_get_contents('php://input');
    //$json = $_REQUEST['data'];
    //$data = json_decode($user);

    // $json = $_POST['data'];
    // echo "Received JSON: " . $json; // Output what was received to debug
    // $data = json_decode($json);
    // if ($data === null) {
    //     echo "Error decoding JSON: " . json_last_error_msg();
    //     exit;
    // }else {
    //     echo "decoding JSON: Name = ". $data['name'];
    // }

    // $name = $data['name'];
    // $email = $data['email'];
    // $gender = $data['gender'];
    // $dob = $data['dob'];
    // $username = $data['username'];
    // $usertype = $data['usertype'];
    // $password = $data['password'];
    // $confirmpassword = $data['confirmpassword'];
    

    
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

    if ($password != $confirmpassword) {
        echo "Password does not match";
    } else {
        $duplicate = duplicateCheck($username, $email);
        if ($duplicate > 0) {
            echo "Username or email has already been taken";
        } else {
            $result = signupCheck($name, $email, $username, $usertype, $password, $gender, $dob);
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