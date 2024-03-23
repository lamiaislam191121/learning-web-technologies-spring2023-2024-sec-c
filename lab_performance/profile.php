<?php include 'profileCheck.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
    <table style="text-align: left;" border = "1" >
        <tr>
            <th colspan="2" style="text-align: center;">Profile</th>
        </tr>
        <tr>
            <td>ID</td>
            <td><?= htmlspecialchars($user['id']) ?></td>
        </tr>
        <tr>
            <th >Name</th>
            <td><?= htmlspecialchars($user['name']) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($user['email']) ?></td>
        </tr>
        <tr>
            <th>User Type</th>
            <td><?= htmlspecialchars($user['usertype']) ?></td>
        </tr>
        <tr>
            <th style="text-align: right;" colspan="2"><a href="gohomeController.php">Go Home</a></th>
        </tr>
        
    </table>
</body>
</html>