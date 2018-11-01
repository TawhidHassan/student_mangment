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


<!--********data show for update********
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

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
        <table align="center">
       <form action="update_student.php" method="post">
           <tr>
           <th>Enter stander</th><td><input type="number" name="stander" placeholder="enter stander" required></td>
           </tr>
           <tr>
           <th>Enter student name</th><td><input type="text" name="stuname" placeholder="enter student name" required></td>
           </tr>
           <tr>
               <td colspan="2" align="center"><input type="submit" name="submit" value="search"></td>
           </tr>
        </form> 
            </table>
        
        <table align="center" width="80%" border="2" style="margin-top:10px;">
        <tr style="background:#000;color:#fff;">
            <th>no</th>
            <th>image</th>
            <th>name</th>
            <th>roll no</th>
            <th>EDIT</th>
            </tr>
              <?php
        if(isset($_POST['submit']))
        {
            include('../data_conection.php');
            $stander=$_POST['stander'];
            $name=$_POST['stuname'];
            $qre="SELECT * FROM `student_d` WHERE `stander`='$stander' AND `Name` LIKE '%$name%'";
            $run=mysqli_query($con,$qre);
            
            if(mysqli_num_rows($run)<1){
                echo "<tr><td>no record found</td></tr>";
            }
            else
            {
                $count=0;
               while($data=mysqli_fetch_assoc($run))
                {
                   $count++;
                    ?>
                    <tr align="center">
                    <td><?php echo $count ?></td>
                    <td><img src="../data_imag/<?php echo $data['imag']; ?>" style="max-width:100px;"></td>
                    <td><?php echo $data['Name']; ?></td>
                    <td><?php echo $data['Roll']; ?></td>
                    <td><a href="edit.php?sid=<?php echo $data['Id']; ?>">Edite</a></td>
                    </tr>
                    <?php
                }
            }
        }
        ?>
        </table>
    </body>
</html>




