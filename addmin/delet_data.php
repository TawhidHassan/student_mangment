<!--********************* code for delet data *******************
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

<?php
 include('../data_conection.php');
    $id=$_REQUEST['sid']; /*request---post/get use kora jaba*/
    $qry="DELETE FROM `student_d` WHERE `Id` = '$id';"; 
    $run=mysqli_query($con,$qry);
    
    
    if($run==true)
    {
        ?>
       <script>
           alert("delate data sececfully");
        window.open('delat_st.php?','_self');
</script>
<?php
    }
?>