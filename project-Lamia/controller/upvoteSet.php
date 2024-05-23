<?php
require_once '../model/usermodel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : null;

    if ($product_id !== null) {
        setUpvote($product_id);
    } else { 
        echo  "Invalid product ID";
    }
}
?>
