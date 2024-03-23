<?php
require 'config.php';
session_start();

if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];

    
    $query = "SELECT * FROM user_info WHERE id = '{$userid}'";

    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
       
        $user = $result->fetch_assoc();
    } else {
        echo "No user found with ID: $userid";
    }
}

?>
