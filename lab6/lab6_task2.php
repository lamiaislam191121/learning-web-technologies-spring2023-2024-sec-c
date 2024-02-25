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
            <a href="#"> Home </a>
            <a href="#"> Login </a>
            <a href="#"> Registration </a>
        </th>
    <tr>
        <td>
        <fieldset>
            <legend>REGISTRATION</legend>
            Name:<input type="text" name="name"> <hr> 
            Email:<input type="email" name="email"> <hr> 
            User Name:<input type="text" name="username"> <hr> 
            password:<input type="password" name="password"> <hr> 
            Confirm Password:<input type="password" name="confirm_password"> <hr> 
       </fieldset>
       <hr>
       <fieldset>
             <legend>GENDER</legend>
             <input type="radio" name="gender-male"> male 
             <input type="radio" name="gender-female"> female 
             <input type="radio" name="gender-others"> others 
       </fieldset>
       <hr>
       <fieldset>
            <legend>DATE OF BIRTH</legend>
            <input type="number" name="day" min="1" max="31" required> 
            <input type="number" name="month" min="1" max="12" required>
            <input type="number" name="year" min="1000" max="100000" required> (dd/mm/yyyy)
         </fieldset>
         <hr>
         <input type="submit" name="submit">
         <input type="reset" name="reset">
        </td>
    </tr>
    <tr>
        <td footer style="text-align: center;">copyright@2017</footer></td>
    </tr>
 </body>
</head>
</html>