<?php
    $username = $password ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = Validateusername($_POST["username"]);
        $password = Validatepassword($_POST["password"]);
    }
    
    function Validateusername($username); {
        $username = trim($username);
        $len = strlen($username);
        if($len < 2){
            
        }
        return $data;
     }