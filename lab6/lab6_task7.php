<!DOCTYPE html>
<html land="en">
<head>
    <meta charset="UTF=8">
    <meta name ="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table border = "1" >
        <th>
            <h2 style="display: inline;">xCompany</h2>
            <a href="#"> Bob </a>
            <a href="#"> Logout </a>
        </th>
    <tr>
     <td>
             <strong>Account</strong>
                    <ul>
                        <li><a href="./page-1.html">Dashboard</a></li>
                        <li><a href="./page-1.html">View profile</a></li>
                        <li><a href="./page-1.html">Edit profile</a></li>
                        <li><a href="./page-1.html">Change profile picture</a></li>
                        <li><a href="./page-1.html">Change password</a></li>
                        <li><a href="./page-1.html">Logout</a></li>
                   </ul>
        </td>
        <td>
        <fieldset>
            <legend>Edit Profile</legend>
            Name:<input type="text" name="name"> <hr> 
            Email:<input type="email" name="email"> <hr> 
            Gender: <input type="radio" name="gender-male"> male 
                    <input type="radio" name="gender-female"> female 
                    <input type="radio" name="gender-others"> others 
         Date of birth:<input type="number" name="day" min="1" max="31" required> 
                       <input type="number" name="month" min="1" max="12" required>
                       <input type="number" name="year" min="1000" max="100000" required> (dd/mm/yyyy)
         <hr>
         <input type="submit" name="submit">
        </td>
    </tr>
    <tr>
        <td footer style="text-align: center;">copyright@2017</footer></td>
    </tr>
 </body>
</head>
</html>