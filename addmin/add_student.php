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

<!--***********insert data in database***********
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
<!DOCTYPE HTNL>
<html lang="en_us">
<head>
    <meta charset="UTF-8">
    <title>student managment system</title>
   <link rel="stylesheet" href="/student_management_system/style2.css">
    </head>
    <style>
        body{
            background: 
        }
    .admin{
    text-align: center;
    height: 140px;
    margin-top: 40px;
    width: 80%;
    background:#5DBAF1; 
    margin-left: 50px;
    line-height: 140px;
}
        .dasbord{
            color: #000;
            background: #1DEFFF;
            margin-left: 50px;
            height: 140px;
            line-height: 140px;
            margin-right: 189px;
            font-size: 25px;
            
        }
    </style>
    <body>
<div class="admin">
    <h1>Wellcome to Admin titile</h1>
    <h2 style="float:right;margin-top: -162px;;color:#fff;font-size:25px;"><a href="logout.php">Logout</a></h2>
    <h2 style="float:left;margin-top: -162px;;color:#fff;font-size:25px;"><a href="admin.php">Back to dashbord</a></h2>
</div>
        <form method="post" action="add_student.php" enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
            <td>ROLL</td>
            <td><input type="text" name="rollno" placeholder="enter roll"></td>
            </tr>
            <tr>
            <td>Full name</td>
                <td><input type="text" name="name" placeholder="enter you name"></td>
            </tr>
            <tr>
            <td>city</td>
                <td><input type="text" name="city" placeholder="enter city"></td>
            </tr>
            <tr>
            <td>Parents contacts no</td>
                <td><input type="number" name="pcon" placeholder="enter prants contect numbr"></td>
            </tr>
            <tr>
            <td>standerd</td>
                <td><input type="text" name="std" placeholder="enter stander"></td>
            </tr>
            <tr>
            <td>image</td>
                <td><input type="file" name="simg" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
            </tr>
            </table>
        </form>
    </body>
</html>
        

<?php
if(isset($_POST['submit']))
{
    include('../data_conection.php');
    
    
    $rolno=$_POST['rollno'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcon=$_POST['pcon'];
    $std=$_POST['std'];
    /*imag ar jonno*/
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../data_imag/$imagename");
    /*imag ar jonno*/
    $qry="INSERT INTO `student_d`(`Roll`, `Name`, `City`, `phone_c`, `stander`, `imag`) VALUES ('$rolno','$name','$city','$pcon','$std','$imagename')"; 
    $run=mysqli_query($con,$qry);
    
    
    if($run==true)
    {
        ?>
       <script>
alert("data insert sececfully");
</script>
<?php
    }
}
?>










        
        
        