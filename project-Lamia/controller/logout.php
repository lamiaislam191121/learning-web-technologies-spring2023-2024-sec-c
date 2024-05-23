
<?php
session_start();
unset($_SESSION['login']); 
session_destroy();
if (isset($_COOKIE['rememberMe'])) {
    unset($_COOKIE['rememberMe']);

    setcookie('rememberMe', '', time() - 10, "/");
}
header("Location: ../view/login.php"); 
exit;
?>