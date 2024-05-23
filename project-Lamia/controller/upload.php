<?php
$fileSizeLimit = 10 * 1024 * 1024;
$allowedTypes = ['jpg', 'jpeg', 'png', 'pdf', 'mp4'];
$fileName = $_FILES['myfile']['name'];
$fileTmpName = $_FILES['myfile']['tmp_name'];
$fileSize = $_FILES['myfile']['size'];
$fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
$destination = "../upload/" . $fileName;

if(!in_array($fileExt, $allowedTypes)) {
    echo "Error: Only JPG, JPEG, PNG, PDF, and MP4 files are allowed.";
} else if($fileSize > $fileSizeLimit) {
    echo "Error: File size exceeds 10MB limit.";
} else if(move_uploaded_file($fileTmpName, $destination)) {
    echo "Success";
} else {
    echo "Error: There was an error uploading the file.";
}

?>
