<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../asset/style.css" />
<title>Edit Product - Crowdfunding Campaign</title>
</head>
<body>
<h1>Edit Product</h1>
<form id="editProductForm" action="/update_product" method="POST">
    <label for="productName">Product Name:</label><br>
    <input type="text" id="productName" name="productName" required><br>
    
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br>
    
    <label for="name">Funding Goal:</label><br>
    <input type="number" id="name" name="name" min="1" required><br>
    
    <label for="endDate">End Date:</label><br>
    <input type="date" id="endDate" name="endDate" required><br>
    
    <input type="submit" value="Update Product">
</form>
</body>
</html>
