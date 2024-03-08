<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
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
        <b>ADD PRODUCT</b>
      </legend>

      <label for="name">Name:</label>  <br>
      <input type="text" id="name" name="Name"><br><br>

      <label for="buying_price">Buying Price:</label>
      <input type="text" id="buying_price" name="buying_price"><br><br>

      <label for="selling_price">Selling Price:</label>
      <input type="text" id="selling_price" name="selling_price"><br><br>
      
      <hr>

      <input type="checkbox" id="display" name="display" value="true">
      <label for="display">Display</label>

      <hr>

      <input type="submit" name="submit" value="Submit">
    </fieldset>
  </form>
</body>
</html>