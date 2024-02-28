<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>
<body>
    <table border="1" cellspacing="0" align="center" cellpadding="5">
        <tr>
            <td><img src="img/logo.png" alt="" height="70px">
            <h1 align="left">XCompany</h1>
        </td>
            <td width="500px" align="right">
            Logged In as <a href="bob.php">Bob</a>|
                   
                    <a href="login.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td align="center"><b>Account</b> <hr>
                <ul>
                    <li><a href="dashboard.php">DashBoard</a></li>
                    <li><a href="viewprofile.php">View Profile</a></li>
                    <li><a href="editprofile.php">Edit Profile</a></a></li>
                    <li><a href="changepicture.php">Change Profile Picture</a></li>
                    <li><a href="changepassword.php">Change Password</a></li>
                    <li><a href="logout.php">log Out</a></li>
                </ul>
            </td>
            <td >
            <form action="" method="">
                    <fieldset>
                        <legend><b>CHANGE PASSWORD</b></legend>
                        <table align="left">
                                Current Password: <input type="password" name="password"><br>
                                <span style="color: green ;"> New Password: </span><input type ="password" name="new-password"><br>
                                <span style="color: red ;"> Re-type Password: </span><input type ="password" name="re-type-new-password"><br>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" id="" value="Submit">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright (c) 2017</td>
        </tr>
    </table>
</body>
</html>