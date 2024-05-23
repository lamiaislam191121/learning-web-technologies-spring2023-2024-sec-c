<?php
    require '../model/config.php';
    if(!empty($_SESSION["name"])){
		$username = $_SESSION["name"];
		$result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = $username");
        $row = mysqli_fetch_assoc($result);
        }   
        else{
             header("location: ../view/index.php");
        }
?>