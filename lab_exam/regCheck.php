
<?php
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirm_password'];
    $gender = $_REQUEST['gender'];

    $day = $_REQUEST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];

    $isfirst_nameValid = true;
    $islast_nameValid = true;
    $isEmailValid = true;
    $isDOBValid = true;
    $isgenderValid =true;

    // validation for Name
    if( strlen($first_name) < 2 && strlen($last_name) < 2 ){
        $isfirst_nameValid = false;
        $islast_nameValid = false;
        echo 'Name and User Name Must Be Atleast 2 Characters <br>';
    }
    if (empty($first_name) && empty($last_name)) {
        echo "name can not be empty </br>";
        $isfirst_nameValid = false;
        $islast_nameValid = false;
    }
    if(strpbrk($first_name, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ') == strlen($first_name)){
        echo "Can contain a-z or A-Z or dot(.) or dash(-) </br>";
        $isfirst_nameValid = false;
    }
    if(ctype_alpha($first_name[0])){
        echo "Must start with a letter </br>";
        $isfirst_nameValid = false;
    }
    if(strpbrk($last_name, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ') == strlen($last_name)){
        echo "Can contain a-z or A-Z or dot(.) or dash(-) </br>";
          $islast_nameValid = false;
    }
    if(ctype_alpha($last_name[0])){
        echo "Must start with a letter </br>";
        $islast_nameValid = false;
    }
    // validation for email
    if(!str_contains($email, '@') && !str_contains($email, '.') && !str_contains($email, 'com')){
        echo 'Email Must Be Valid </br>';
        $isEmailValid = false;
    }
    
    // validation for DOB
    if(!($day >= 1 && $day <= 31) && !($month >= 1 && $month <= 12) && !($year <= 2023-18)){
        echo 'Date Of Birth Must Be Valid and You Must Be Atleast 18 Years Old </br>';
        $isDOBValid = false;
    }
    //validation for gender
    if (empty($gender)) {
        echo "At least one of them has to be selected </br>";
        $isgenderValid = false;
    }
    if( $isfirst_nameValid  &&  $islast_nameValid && $isEmailValid && $isDOBValid && $isgenderValid){
        echo 'Registration Successful </br>';
    }
    else{
        echo 'Registration Unsuccessful';
    }
?>
