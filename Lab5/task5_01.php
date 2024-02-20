<?php
    $userName = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $isUserNameValid = true;
    $isPasswordValid = true;
    
    // validation for userName
    if(strlen($userName) < 2){
        $isUserNameValid = false;
        echo 'Username must be atleast 2 characters <br>';
    }
    for($i = 0; $i < strlen($userName) ; $i++){
        if( !(ord($userName[$i]) >= 65 && ord($userName[$i]) <= 90) && !(ord($userName[$i]) >= 97 && ord($userName[$i]) <= 122) && $userName[$i] != '.' && $userName[$i] != '-' && $userName[$i] != '_' ){
            $isUserNameValid = false;
            echo 'Invalid character in username <br>';
            break; }
    }
     // validation for password
    if(strlen($password) < 8){
        $isPasswordValid = false;
        echo 'Password must be atleast 8 characters <br>'; }
    if(!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '%')){
        $isPasswordValid = false;
        echo 'Password must contain @, #, $ or % <br>'; }

    if($isUserNameValid && $isPasswordValid) {
        echo 'Valid user'; }
    else{
        echo 'Invalid user'; }

?>