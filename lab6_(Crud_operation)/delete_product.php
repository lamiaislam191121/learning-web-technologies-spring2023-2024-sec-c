<!DOCTYPE html>
<html>
<head>
  <title>Table with Edit and Delete Buttons</title>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>NAME</th>
        <th>PROFIT</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      $host = 'localhost';
      $user = 'root';
      $pass = '';
      $dbname = 'product_db';

      $conn = mysqli_connect($host, $user, $pass, $dbname);

      $result = mysqli_query($conn, "SELECT * FROM product");

      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['Name'] . "</td>";
          
          // Assuming PROFIT is the difference between Buying_Price and Selling_Price
          $profit = $row['Selling_Price'] - $row['Buying_Price'];
          echo "<td>" . $profit . "</td>";

          echo "<td><a href='edit.php?id=" . (isset($row['id']) ? $row['id'] : '') . "'>edit</a></td>";
          echo "<td><a href='delete.php?id=" . (isset($row['id']) ? $row['id'] : '') . "'>delete</a></td>";
          echo "</tr>";
      }

      mysqli_close($conn);
      ?>
    </tbody>
  </table>
</body>
</html>