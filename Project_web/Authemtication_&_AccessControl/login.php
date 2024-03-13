<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
    <body>
        <form method="POST" action="loginCheck.php">
            <table align="center">
                <tr>
                    <th colspan="2"><h2 alig="center">Login</h2></th>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>