<?php
    $currentPasssword = $_REQUEST['currentPassword'];
    $newPassword = $_REQUEST['newPassword'];
    $retypePassword = $_REQUEST['retypePassword'];

    $isPasswordChangeValid = true;
    
    if($currentPasssword == '' || $newPassword == '' || $retypePassword == ''){
        echo 'values cannot be empty <br>';
        $isPasswordChangeValid = false; }
    
    if($newPassword == $currentPasssword) {
        echo 'New password should not same as current password <br>';
        $isPasswordChangeValid = false; }

    if($newPassword != $retypePassword) {
        echo 'retyped password must be same as new password <br>';
        $isPasswordChangeValid = false; }

    if($isPasswordChangeValid) {
        echo 'Password change successful'; }
    else{
        echo 'Password change unsuccessful'; }

?>