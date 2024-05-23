<?php
require_once '../model/usermodel.php';
session_start();

if (isset($_POST["signup"])) {

    // Set header to ensure the output is treated as JSON
    header('Content-Type: application/json');

    // Read the JSON POST input
    $input = file_get_contents("php://input");
    $jsonData = json_decode($input, true);

    // Decode the 'data' portion of the JSON if it exists
    if (isset($jsonData['data'])) {
        $data = json_decode($jsonData['data'], true);
        
        // Echo the values
        echo "Name: " . $data['name'] . "\n";
        echo "Email: " . $data['email'] . "\n";
        echo "Gender: " . $data['gender'] . "\n";
        echo "Date of Birth: " . $data['dob'] . "\n";
        echo "Username: " . $data['username'] . "\n";
        echo "User Type: " . $data['usertype'] . "\n";
        echo "Password: " . $data['password'] . "\n";  // Caution: Generally, do not echo passwords
        echo "Confirm Password: " . $data['confirmpassword'] . "\n";
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No data provided']);
    }


}
?>