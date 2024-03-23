<?php
require 'config.php';
session_start();

if (isset($_SESSION['userid']) && isset($_POST['submit'])) {
    $userid = $_SESSION['userid'];
    $currentPassword = $_POST['currentPassword']; 
    $newPassword = $_POST['newPassword'];
    $retypePassword = $_POST['retypePassword'];

    
    if ($newPassword === $retypePassword) {
       
        $query = "SELECT password FROM user_info WHERE id = '{$userid}'";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            if ($currentPassword === $user['password']) {
                
                $updateQuery = "UPDATE user_info SET password = '{$newPassword}' WHERE id = '{$userid}'";
                if ($conn->query($updateQuery) === TRUE) {
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
