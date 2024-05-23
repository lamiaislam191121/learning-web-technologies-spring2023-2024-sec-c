<?php
    //session_start();
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "userlog";

function dbConnect(){
    global $host;
    global $dbname;
    global $dbuser;
    global $dbpass;

    $conn = mysqli_connect($GLOBALS['host'], $GLOBALS['dbuser'], $dbpass, $dbname);
    return $conn;
}
?>
    