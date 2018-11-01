<?php

function showditels($stande,$stdroll)
{
   include('data_conection.php');
    $que="SELECT * FROM `student_d` WHERE `Roll`='$stdroll' AND `stander`='$stande'";
    $run=mysqli_query($con,$que);
    if(mysqli_num_rows($run)>0)
    {
        $data=mysqli_fetch_assoc($run);
        ?>
      <table align="center" border="2" style="width:50%">
         <tr>
         <th colspan="3" >student details</th>
          </tr>
         <tr>
          <td rowspan="5"><img src="data_imag/<?php echo $data['imag'];  ?>" style="max-width:200;max-height:180px;"></td>
            <th>roll no</th>
             <td><?php echo $data['Roll']; ?></td>
          </tr>
          <tr>
          <th>Name</th>
               <td><?php echo $data['Name']; ?></td>
          </tr>
          <tr>
          <th>stander</th>
              <td><?php echo $data['stander']; ?></td>
          </tr>
          <tr>
          <th>paraents contect number</th>
              <td><?php echo $data['phone_c']; ?></td>
          </tr>
          <tr>
          <th>city name</th>
              <td><?php echo $data['City']; ?></td>
          </tr>
    </table>
   <?php
    }
    else
        echo"<script> 
        alert('no data found!');
        </script>";
}


?>