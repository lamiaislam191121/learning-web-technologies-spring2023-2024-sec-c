<?php
    require_once '../model/usermodel.php';
    session_start();
    
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST["newPassword"];
    $retypePassword = $_POST["retypePassword"];

    $isPasswordChangeValid = true;
    
    if($currentPassword == '' || $newPassword == '' || $retypePassword == ''){
        echo 'Fields Cannot Be Empty <br>';
        $isPasswordChangeValid = false;
    }
    
    if($newPassword == $currentPassword) {
        echo 'New Password Cannot Be Same As Current Password<br>';
        $isPasswordChangeValid = false;
    }

    if($newPassword != $retypePassword) {
        echo 'Passwords do not match<br>';
        $isPasswordChangeValid = false;
    }

    if($isPasswordChangeValid) {
        echo 'Password has been updated successfully';
        
    }
    else{
        echo 'Unable to update password';
    }

?>
