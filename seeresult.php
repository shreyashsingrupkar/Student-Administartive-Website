
<?php  
include('dbcon.php');
session_start();
require('studentcheck.php');

$rollno=$_SESSION['rollno'];
$first=$_SESSION['first'];
$last=$_SESSION['last'];

    

 $qry1 = "SELECT * FROM `admin_student` WHERE RollNo=$rollno";
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

    




            <h3 align="left"><a href="studentdash.php" style="background:#4CAF50; color:#F8F9F9;">Back</a></h3>
           <table align="center" border="1" style="width:50%; margin-left: 25%; margin-top:2%;">
            <tr>
                <th colspan="3">Result</th>
            </tr>
            
                
            <tr>
                <td>Roll No</td>
                <td align="center"><?php echo $data['RollNo'] ?></td>
            </tr>
             <tr>
                <td>First Name</td>
                <td align="center"><?php echo"".$first  ?></td>
            </tr>
             <tr>
                <td>Last Name</td>
                <td align="center"><?php echo"".$last  ?></td>
            </tr>
            <tr>
                <td>Subject 1</td>
                <td align="center"><?php echo $data['subject1'] ?></td>
            </tr>
              <tr>
                <td>Subject 2</td>
                <td align="center"><?php echo $data['subject2'] ?></td>
            </tr>
              <tr>
                <td>Subject 3</td>
                <td align="center"><?php echo $data['subject3'] ?></td>
            </tr>
              <tr>
                <td>Subject 4</td>
                <td align="center"><?php echo $data['subject4'] ?></td>
            </tr>
              <tr>
                <td>Subject 5</td>
                <td align="center"><?php echo $data['subject5'] ?></td>
            </tr>
              <tr>
                <td>Subject 6</td>
                <td align="center"><?php echo $data['subject6'] ?></td>
            </tr>
              <tr>
                <td>Total Marks</td>
                <td align="center"><?php echo $data['totalmarks'] ?></td>
            </tr>
              <tr>
                <td>Percentage</td>
                <td align="center"><?php echo $data['percentage'] ?></td>
            </tr>
              <tr>
                <td>Result</td>
                <td align="center"><?php echo $data['result'] ?></td>
            </tr>
           
        </table>
 <div class="footer">
  <p> <br>Developed By<br>Shreyash Singrupkar<br>Copyright@2020</p>
</div>

  </body>
  </html>



<?php
         }
         else {

           ?>
        <script>
            alert('Result Not Declared');
            window.open('studentdash.php','_self');
</script>
        <?php
         }


         ?>