<?php 
    include '../controller/profileCheck.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../asset/style.css" />
    <title>Profile</title>
</head>
<body>
    <div class = "container profilebody">
        <div class="profile-card">
            <div class="card-header">
                <h1>User Profile</h1>
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> <span><?= htmlspecialchars($user['id']) ?></span></p>
                <p><strong>Name:</strong> <span><?= htmlspecialchars($user['name']) ?></span></p>
                <p><strong>Gender:</strong> <span><?= htmlspecialchars($user['gender']) ?></span></p>
                <p><strong>Date of Birth:</strong> <span><?= htmlspecialchars($user['dob']) ?></span></p>
                <p><strong>Email:</strong> <span><?= htmlspecialchars($user['email']) ?></span></p>
                <p><strong>User Type:</strong> <span><?= htmlspecialchars($user['usertype']) ?></span></p>
            </div>
            <div class="card-footer">
                <a href="welcome.php">Go Home</a>
                <a href=#>Edit User</a>
                <a href=#>Delete User</a>
            </div>
        </div>
    </div>
</body>
</html> 