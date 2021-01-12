 <?php 
function showdetails($rollno){
 include('dbcon.php');

    $qry1 = "SELECT * FROM `student_info` WHERE `RollNo`='$rollno'";
    $qry2="SELECT totalmarks,percentage,result FROM admin_student  WHERE `RollNo`='$rollno'";

    $run1 = mysqli_query($con,$qry1);
    $run2=mysqli_query($con,$qry2);

  if(mysqli_num_rows($run1)==1 || mysqli_num_rows($run2)==1){

     $data1 = mysqli_fetch_assoc($run1);
    
     ?>

     <html>
     <head>
         
     </head>
     <body>
        

        <table align="center" border="1" style="width:50%; margin-left: 25%;margin-top: 10px;">
            <tr>
                <th colspan="3">Student Details</th>
            </tr>
            <tr>
                
                <td>Roll No</td>
                <td align="center"><?php echo $data1['RollNo'] ?></td>
                
           </tr>
            <tr>
                <td>First Name</td>
                <td align="center"><?php echo $data1['FirstName'] ?></td>
            </tr>
            <tr>
                <td>LastName</td>
                <td align="center"><?php echo $data1['LastName'] ?></td>
            </tr>
            <tr>
                <td>Eamil</td>
                <td align="center"><?php echo $data1['Email'] ?> </td>
            </tr>
            <tr>
                <td>MobNo</td>
                <td align="center"><?php echo $data1['Mobno'] ?> </td>
            </tr>

            <?php

                if(mysqli_num_rows($run2)==1){
                     $data2 = mysqli_fetch_assoc($run2);

             ?> 
              <tr>
                <td>Obtained Marks</td>
                <td align="center"><?php echo $data2['totalmarks'] ?> </td>
            </tr>
             <tr>
                <td>Percentage</td>
                <td align="center"><?php echo $data2['percentage'] ?> </td>
            </tr>
             <tr>
                <td>Result</td>
                <td align="center"><?php echo $data2['result'] ?> </td>
            </tr>

             <?php

                }else{

             ?> 
             <tr>
                <td>Percentage</td>
                <td align="center"><?php echo "Not Updated"?> </td>
            </tr>
             <tr>
                <td>Result</td>
                <td align="center"><?php echo "Not Updated" ?> </td>
            </tr>
             <?php

                }

             ?> 




         
     </body>
     </html>
      
     
            <?php
 	}

    else{
        echo"<script>alert('No Student Found'); </script>";
    }
}
?>


 