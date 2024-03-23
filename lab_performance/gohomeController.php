<?php
session_start();

if (isset($_SESSION["usertype"])) {
    if ($_SESSION["usertype"] == "admin") {
        header("Location: welcome(admin).php");
        exit;
    } elseif ($_SESSION["usertype"] == "user") {
        header("Location: welcome(user).php");
        exit;
    }
}

header("Location: login.php");
exit;
?>