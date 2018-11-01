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
</div>
    </body>
</html>