<?php
require_once '../model/usermodel.php';
session_start();

if (isset($_SESSION['name'])) {
    $username = $_SESSION['name'];
    $user = getUser($username);
    if ($user < 0) {
        echo "No user found with Username: $username";
    }
}

if (isset($_SESSION["name"]) && isset($_POST['submit'])) {
    $username = $_SESSION["name"];
    $currentPassword = $_POST['currentPassword']; 
    $newPassword = $_POST['newPassword'];
    $retypePassword = $_POST['retypePassword'];

    if(strlen($newPassword) < 4){
        echo "Password Must Be Atleast 4 Characters </br>";
    }
    if(!str_contains($newPassword, '@') && !str_contains($newPassword, '#') && !str_contains($newPassword, '$') && !str_contains($newPassword, '.') && !str_contains($newPassword, '%')){
        echo "Password Must Contain @, #, $, . or % </br>" ;
    }
    if ($newPassword === $retypePassword) {
       
        $user = getUser($username);
        if ($user < 0) {
            echo "No user found with Username: $username";
        } else {
            if ($currentPassword === $user['password']) {
                
                $status = changePass($newPassword,$username);
                if ($status) {
                    echo "Password updated successfully.";
                } 
            } else {
                echo "Current password is incorrect.";
            }
        }
    } else {
        echo "New passwords do not match.";
    }
}
?>
