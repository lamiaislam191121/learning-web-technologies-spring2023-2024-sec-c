<?php

require_once '../model/usermodel.php';
session_start();

if (isset($_POST["search"]) && !empty($_POST["username"])) {
    
    $searchTerm = $_POST["username"];

   $result =  searchUser($searchTerm );
   $search_result = mysqli_fetch_assoc($result);
   if ( mysqli_num_rows($result) <= 0) {
       echo "No user found with : $searchTerm ";
   }
   else {
        echo "Name: " . htmlspecialchars($search_result ['name']) . "<br/>";
        echo "Email: " . htmlspecialchars($search_result ['email']) . "<br/><br/>" ;
   }
 }

?>