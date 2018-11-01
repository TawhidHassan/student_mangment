
<!--*************** server conection *****************
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
<?php
$con=mysqli_connect('sql113.ezyro.com','ezyro_22634096','pox2i4hdj','ezyro_22634096_student_d');
if($con==false){
    
    echo "nonection error";
}
else
    echo "ok";
?>