<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:addmin/admin.php');
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>addmoin login</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1 align="center">LOGin your acount</h1>
        <form action="login.php" method="post">
        <table align="center">
            <tr>
            <td class="none">Enter your username</td>
            <td><input type="text" name="uname" required></td>
            </tr>
            <tr>
            <td class="none">Enter your Password</td>
            <td><input type="password" name="pass" required></td>
            </tr>
            <tr>
            <td colspan="2"m class="logbtn" align="center"><input type="submit" name="login" value="login"> </td>
            </tr>
            </table>
        </form>
    </body>
</html>

<?php
include('data_conection.php');
if(isset($_POST['login'])){
    $username=$_POST['uname'];
    $pasword=$_POST['pass'];
    
    
    
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `Password`='$pasword'";
     $run= mysqli_query($con,$qry);
    
    $row=mysqli_num_rows($run);
    if($row<1){
     ?>
        <script>
            alert('user name or password not mach');
            window.open('login.php','_self');
            </script>
    <?php
    }
    else{
        $data=mysqli_fetch_assoc($run);
        $id=$data['Id'];
        
        $_SESSION['uid']=$id;
        header('location:addmin/admin.php');
    }
}
    
?>



