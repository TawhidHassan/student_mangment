<html>
<head>
    <meta charset="UTF-8">
    <title>student managment</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    
        <h1 align="center">welcome to student mahagment system</h1>
        <h3 align="right"><a href="login.php">Admin Login</a></h3>
        
        <form method="post" action="index.php">
        <table align="center">
        <tr>
            <td colspan="2"><h1>student information</h1></td>
            </tr>
            <tr>
            <td>choose stander</td>
                <td>
                <select name="str" required>
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td>Enter rollno</td>
                <td><input type="text" name="rollno" required></td>
            </tr>
            <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="show details"> </td>
            </tr>
        </table>
        </form>
    </body>
</html>



<?php
if(isset($_POST['submit']))
{
    $stande=$_POST['str'];
    $stdroll=$_POST['rollno'];
    include('data_conection.php');
    include('function.php');
    showditels($stande,$stdroll);
    
}

?>















