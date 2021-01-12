
<?php  
include('dbcon.php');
session_start();
require('studentcheck.php');

 $username=$_SESSION['user'];
    $password=$_SESSION['pass'];


    

 $qry1 = "SELECT * FROM `student_info` WHERE Email = '$username' AND Password = '$password'";
    $run1 = mysqli_query($con,$qry1);

  if(mysqli_num_rows($run1)==1){

     $data = mysqli_fetch_assoc($run1);

      ?>
        

  <html>
  <head>
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  
  

  
  </head>

  <body>

  <div class="header">
  <a class="logo">STUDENT ADMINISTATIVE SYSTEM</a>
  <div class="header-right">
     <a href="logout.php">Logout</a>
  </div>
</div>
<br>
    




           <table align="center" border="1" style="width:50%; margin-left: 25%; margin-top:10%;">
            <tr>
                <th colspan="3">Student Details</th>
            </tr>
            
                <tr>
                    <td colspan="3" align="center" style="color: red ">Result::<a class="education" href="seeresult.php" style="background:#4CAF50; color:#F8F9F9; hover:background-color:red;">See Result</a></td>
                </tr>
                   <tr>
                <td>Roll No</td>
                <td align="center"><?php echo $data['RollNo'] ?></td>
            </tr>


            <?php

                $roll=$data['RollNo'];
                $_SESSION['rollno']=$roll;

            ?>
                
            <tr>
                <td>First Name</td>
                <td align="center"><?php echo $data['FirstName'] ?></td>
            </tr>
            <tr>
                <td>LastName</td>
                <td align="center"><?php echo $data['LastName'] ?></td>
            </tr>
            
            <tr>
                <td>MobNo</td>
                <td align="center"><?php echo $data['Mobno'] ?> </td>
            </tr>
            <?php

                $roll=$data['RollNo'];
                $_SESSION['rollno']=$roll;

                $first=$data['FirstName'];
                $_SESSION['first']=$first;

                 $last=$data['LastName'];
                $_SESSION['last']=$last;

            ?>

        </table>

           <div class="footer">
  <p> <br>Developed By<br>Shreyash Singrupkar<br>Copyright@2020</p>
</div>

  </body>
  </html>



<?php
         }
         ?>