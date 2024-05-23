<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style.css" />
    <title>File Upload Example</title>
</head>
<body>
<?php include 'nav.php' ?>
    <div class = "container">
        <div class = "form-container">
            <h2>Upload file</h2>
                <form method="POST" action="../controller/upload.php" enctype="multipart/form-data">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" required>
                        <label for="address">Address:</label>
                        <input type="text" name="address" id="address" required>
                        <div class = "file-select">
                                <input type="file" name="myfile"/>
                        </div>
                        <input type="submit" name="submit" value="Submit" />
                </form>
        </div>
    </div>
</body>
</html>