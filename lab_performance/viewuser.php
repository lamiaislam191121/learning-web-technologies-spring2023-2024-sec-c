<?php include 'viewuserController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Information</title>
</head>
<body>

<?php if (!empty($users)): ?>
    <table style="text-align: left;" border = "1">
        <tr>
            <th colspan="4" style="text-align: center;">Profile</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>User Type</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user["id"]); ?></td>
                <td><?= htmlspecialchars($user["name"]); ?></td>
                <td><?= htmlspecialchars($user["email"]); ?></td>
                <td><?= htmlspecialchars($user["usertype"]); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <th style="text-align: right;" colspan="4"><a href="gohomeController.php">Go Home</a></th>
        </tr>
    </table>
<?php else: ?>
    <p>No user information available.</p>
<?php endif; ?>


</body>
</html>