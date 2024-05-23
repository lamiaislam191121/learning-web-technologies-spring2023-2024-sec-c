<?php
require '../model/usermodel.php';
session_start();

if (isset($_SESSION['name'])) {
    $username = $_SESSION['name'];
    $user = getUser($username);
    if ($user < 0) {
        echo "No user found with Username: $username";
    }
}

?>
