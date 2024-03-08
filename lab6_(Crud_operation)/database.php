<?php
if(isset($_POST['submit']))
{
    $Name = $_POST['Name'];
    $Buying_Price = $_POST['buying_price'];
    $Selling_Price = $_POST['selling_price'];
    
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'product_db';

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    $sql = "INSERT INTO product(Name, Buying_Price, Selling_Price) VALUES ('$Name', '$Buying_Price', '$Selling_Price')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
?>