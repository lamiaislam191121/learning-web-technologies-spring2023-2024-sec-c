<?php
require 'config.php';

function login($username, $password){
    $conn = dbConnect();
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");
    $count = mysqli_num_rows($result);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        return $user; 
    }
    return false;

    // if($count == 1){
    //     return true;
    // }else{
    //     return false;
    // }
}

function getUser($username){
    $conn = dbConnect();
    $query = "SELECT * FROM tb_user WHERE username = '{$username}'";
    $result = mysqli_query($conn, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;

}

function searchUser($searchTerm){
    $conn = dbConnect();
    $query = "SELECT * FROM tb_user WHERE name = '{$searchTerm}' OR  username = '{$searchTerm}' OR email = '{$searchTerm}'";
    $result = mysqli_query($conn, $query);

    return $result;

}

function duplicateCheck($username, $email){
    $conn = dbConnect();
    $query = "SELECT * FROM tb_user WHERE username = '{$username}' OR email = '{$email}'";
    $result = mysqli_query($conn, $query);

    $count = mysqli_num_rows($result);

    return $count;
}

function signupCheck($name, $email, $username , $usertype , $password, $gender, $dob){
    $conn = dbConnect();
    $query =  "INSERT INTO tb_user (name, email, username, usertype, password, gender, dob) VALUES ('$name', '$email', '$username', '$usertype', '$password', '$gender', '$dob' )";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "SQL Error: " . mysqli_error($conn); // Display the specific SQL error
    }

    return true;
}

function changePass($newPassword,$username){
    $conn = dbConnect();
    $query = "UPDATE tb_user SET password = '{$newPassword}' WHERE username = '{$username}'";
    $result = mysqli_query($conn, $query);

    return true;
}

/*  Add Product  */

function viewProductInfo($category) {
    $conn = dbConnect();
    $query = "SELECT * FROM tb_product WHERE prod_category = '{$category}'";
    $result = mysqli_query($conn, $query);

    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    return $products;
}

function getProductOwner($ownerId) {
    $conn = dbConnect();
    $query = "SELECT * FROM tb_user WHERE id = '{$ownerId}'";
    $result = mysqli_query($conn, $query);

    $owner = mysqli_fetch_assoc($result);
    return $owner;
}

function setUpvote($productId) {
    $conn = dbConnect();
    $checkQuery = "SELECT * FROM product_info WHERE product_id = '{$productId}'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) == 0) {
        $insertQuery = "INSERT INTO product_info (product_id, upvote) VALUES ('{$productId}', 1)";
        mysqli_query($conn, $insertQuery); 
    } else {
        
        $updateQuery = "UPDATE product_info SET upvote = upvote + 1 WHERE product_id = '{$productId}'";
        mysqli_query($conn, $updateQuery);
    }

    return true;
}

function getProductInfo($productId) {

    $conn = dbConnect();
    $query = "SELECT * FROM product_info WHERE product_id = '{$productId}'";
    $result = mysqli_query($conn, $query);

    $product_info = mysqli_fetch_assoc($result);
    return $product_info;
}


