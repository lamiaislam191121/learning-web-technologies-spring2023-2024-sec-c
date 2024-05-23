
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style.css" />
    <title>Signup</title>
</head>
<body>
<?php include 'nav.php' ?>
    <div class = "container">
        <div class = "form-container">
            <h2>SignUp</h2>
            <form method="POST" action="../controller/signupCheck.php"  onsubmit="return signupValidate()">

            <!-- <form onsubmit="signupValidate()"> -->
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">

                <label for="email">Email:</label>
                <input type="text" name="email" id="email">

                <div class="dob">
                    <labe for="dob">Date of Birth:</label>
                    <input type="date" name="dob" id="dob">
                </div>

                <div class="radio-group">
                    <label>Gender:</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>

                    <input type="radio" id="other" name="gender" value="Other"> 
                    <label for="other">Other</label>
                </div>

                <label for="username">Username:</label>
                <input type="text" name="username" id="username">

                <div class="radio-group">
                    <label for="user">User Type:</label>
                    <input type="radio" id="user" name="usertype" value="user">
                    <label for="user"> User </label>

                    <input type="radio" id="admin" name="usertype" value="admin">
                    <label for="admin"> Admin </label>
                </div>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password">

                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" name="confirmpassword" id="confirmpassword">

                <!-- <input type="submit" name="signup" value="signup" /> -->

                <input type="submit" name="signup" id="signup" value="signup" onclick="ajax()" />

            </form>
            <a href="login.php">Login</a>
        </div>
    </div>  
    <script src="../asset/script.js"> </script>  
</body>
</html>
