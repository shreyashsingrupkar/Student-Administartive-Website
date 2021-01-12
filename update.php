<?php
include('dbcon.php');
session_start();
require('admincheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css"href="css/loginstyle.css">
</head>
<body>
    <div class="header">
  <a class="logo">STUDENT ADMINISTATIVE SYSTEM</a>
  <div class="header-right">
  
    <a href="adminlogout.php">Logout</a>
  </div>
</div>

     
      <h3 align="left"><a href="admindash.php" style="background:#4CAF50; color:#F8F9F9;">Back</a></h3>
    <div class="main">

        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="update.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Enter Information</h2>
                       
                        <div class="form-group">
                            <input type="text" class="form-input" name="rollno"  placeholder="Roll No" required="" />
                        </div>
                          <div class="form-group">
                            <input type="text" class="form-input" name="email" placeholder="Email" required="" />
                          
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="mobno" placeholder="Mobile Number" required="" />
                          
                        </div>
                        
                        
                         <div class="form-group">
                            <input type="submit" name="update" id="submit" class="form-submit" value="Update"/>
                        </div>
                    </form>
                    
                     
                </div>
            </div>
        </section>

    </div>
      <div class="footer">
  <p> <br>Developed By<br>Shreyash Singrupkar<br>Copyright@2020</p>
</div>



   
</body>
</html>
<?php

include('dbcon.php');

if(isset($_POST['update'])){
    
    
    $rollno = $_POST['rollno'];
    $mobno = $_POST['mobno'];
      $email = $_POST['email'];
   
   



    
        if($rollno==''||$marks==''||$result==''){

        

    }
   $sql="UPDATE `student_info` SET `Mobno`='$mobno',`Email`='$email' WHERE `RollNo`='$rollno'";

     if (mysqli_query($con, $sql)) {
        
        header('location:admindash.php');
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($con);
     }
     mysqli_close($con);
}


?>

