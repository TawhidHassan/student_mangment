
<!--**************edit data update code *******************
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
<?php
 include('../data_conection.php');
    
    
    $rolno=$_POST['rollno'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcon=$_POST['pcon'];
    $std=$_POST['std'];
    $id=$_POST['sid'];
    /*imag ar jonno*/
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"../data_imag/$imagename");

    $qry="UPDATE `student_d` SET `Roll` = '$rolno', `Name` = '$name', `City` = '$city', `phone_c` = '$pcon', `stander` = '$std', `imag` = '$imagename' WHERE `Id` = $id;"; 

    $run=mysqli_query($con,$qry);
    
    if($run==true)
    {
        ?>
       <script>
           alert("update data sececfully");
        window.open('edit.php?sid=<?php echo $id; ?>','_self');
</script>
<?php
    }


?>





