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
<!--**************** admin panal **************
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
    <!DOCTYPE HTNL>
    <html lang="en_us">

    <head>
        <meta charset="UTF-8">
        <title>student managment system</title>
        <link rel="stylesheet" href="/student_management_system/style2.css">
    </head>
    <style>
        body {
            background:
        }

        .admin {
            text-align: center;
            height: 140px;
            margin-top: 40px;
            width: 80%;
            background: #5DBAF1;
            margin-left: 50px;
            line-height: 140px;
        }

        .dasbord {
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
        </div>
        <div class="dasbord">
            <table border="1" align="center" style="width:50%;">
                <tr>
                    <td>1</td>
                    <td><a href="add_student.php">Insert student</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="update_student.php">Update student deatils</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="delat_st.php">dleat student details</a></td>
                </tr>
            </table>
        </div>
    </body>
    </html>





