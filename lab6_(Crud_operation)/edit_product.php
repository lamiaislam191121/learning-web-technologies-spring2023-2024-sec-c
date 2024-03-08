<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'product_db';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(isset($_POST['submit']))
{
    $Name = $_POST['Name'];
    $Buying_Price = $_POST['buying_price'];
    $Selling_Price = $_POST['selling_price'];

    // Check if the 'edit_id' parameter is present
    if(isset($_POST['edit_id'])) {
        $edit_id = $_POST['edit_id'];
        // Update existing record
        $sql = "UPDATE product SET Name='$Name', Buying_Price='$Buying_Price', Selling_Price='$Selling_Price' WHERE id=$edit_id";
    } else {
        // Insert new record
        $sql = "INSERT INTO product(Name, Buying_Price, Selling_Price) VALUES ('$Name', '$Buying_Price', '$Selling_Price')";
    }

    mysqli_query($conn, $sql);
}

// Code for fetching and displaying existing records for editing
if(isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $edit_sql = "SELECT * FROM product WHERE id=$edit_id";
    $result = mysqli_query($conn, $edit_sql);
    $row = mysqli_fetch_assoc($result);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
        fieldset {
            width: 250px;
        }
    </style>
</head>
<body>

<form action="database.php" method="POST">
    <fieldset>
        <legend>
            <b>EDIT PRODUCT</b>
        </legend>

        <input type="hidden" name="edit_id" value="<?php echo isset($edit_id) ? $edit_id : ''; ?>">

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="Name" value="<?php echo isset($row['Name']) ? $row['Name'] : ''; ?>"><br><br>

        <label for="buying_price">Buying Price:</label>
        <input type="text" id="buying_price" name="buying_price" value="<?php echo isset($row['Buying_Price']) ? $row['Buying_Price'] : ''; ?>"><br><br>

        <label for="selling_price">Selling Price:</label>
        <input type="text" id="selling_price" name="selling_price" value="<?php echo isset($row['Selling_Price']) ? $row['Selling_Price'] : ''; ?>"><br><br>

        <hr>

        <input type="checkbox" id="display" name="display" value="true">
        <label for="display">Display</label>

        <hr>

        <input type="button" name="save" value="save">
    </fieldset>
</form>
</body>
</html>