<?php
require '../model/usermodel.php';

$category = isset($_GET['category']) ? $_GET['category'] : null;

$products = viewProductInfo($category);

if (!empty($products) && isset($products['prod_owner'])) {
    $ownerId = $products['prod_owner'];
    $owner = getProductOwner($ownerId);
} else {
    $owner = null;
}

?>
