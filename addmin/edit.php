<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
  echo "error! <br>";
    header('location:../login.php');
}
?>
<?php 
include('../data_conection.php');

$Sid=$_GET['sid'];
$qure="SELECT * FROM `student_d` WHERE `Id`='$Sid'";
$run=mysqli_query($con,$qure);
$data=mysqli_fetch_assoc($run);

?>

<!--***************************** data edite for update ***********************
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
<!DOCTYPE HTNL>
<html lang="en_us">
<head>
    <meta charset="UTF-8">
    <title>student managment system</title>
   <link rel="stylesheet" href="/student_management_system/style2.css">
    </head>
    <style>
    .admin{
    text-align: center;
    height: 140px;
    margin-top: 40px;
    width: 80%;
    background:#5DBAF1; 
    margin-left: 50px;
    line-height: 140px;
}
    </style>
    <body>
        <div class="admin">
    <h1>Wellcome to Admin titile</h1>
    <h2 style="float:right;margin-top: -162px;;color:#fff;font-size:25px;"><a href="logout.php">Logout</a></h2>
    <h2 style="float:left;margin-top: -162px;;color:#fff;font-size:25px;"><a href="admin.php">Back to dashbord</a></h2>
</div>
            <form method="post" action="update.php" enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
            <td>ROLL</td>
            <td><input type="text" name="rollno" value=<?php echo $data['Roll']; ?>></td>
            </tr>
            <tr>
            <td>Full name</td>
                <td><input type="text" name="name"   value=<?php echo $data['Name'];?> ></td>
            </tr>
            <tr>
            <td>city</td>
                <td><input type="text" name="city" value=<?php echo $data['City'];?> ></td>
            </tr>
            <tr>
            <td>Parents contacts no</td>
                <td><input type="number" name="pcon" value=<?php echo $data['phone_c']; ?>></td>
            </tr>
            <tr>
            <td>standerd</td>
                <td><input type="text" name="std" value=<?php echo $data['stander']; ?>></td>
            </tr>
            <tr>
            <td>image</td>
                <td><input type="file" name="simg" value=<?php echo $data['imag'] ?> required></td>
            </tr>
            <tr>
            <td>
                <input type="hidden" name="sid" value="<?php echo $data['Id']; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
            </tr>
            </table>
        </form>
    </body>
</html>























