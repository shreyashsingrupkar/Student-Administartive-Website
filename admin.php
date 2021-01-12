<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widths, initial-scale=1.0">
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
    <a class="active" href="index.php">Home</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
  </div>
</div>
<br>

    <div class="main">

        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="admin.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">ADMIN LOG IN</h2>
                       
                        <div class="form-group">
                            <input type="text" class="form-input" name="uname" id="email" placeholder="Username" required="Enter Id" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="pass" id="password" placeholder="Password" required="" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        
                        
                        <div class="form-group">
                            <input type="submit" name="login" id="submit" class="form-submit" value="Login"/>
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

if(isset($_POST['login'])){
    
    $username = $_POST['uname'];
    $password = $_POST['pass'];


  $_SESSION['adminuser']=$username;


    if($username==''||$password==''){

        ?>

        <script>
            alert('please fill username or password');
            window.open('admin.php','_self');
</script>
        <?php

    }
    
    $qry = "SELECT * FROM `admin_info` WHERE adminuser = '$username' AND pass = '$password'";
    
    $run = mysqli_query($con,$qry);
    
    $row = mysqli_num_rows($run);
    
    if($row>=1)
    {?>
        <script>
            alert('login succesful');
            window.open('admindash.php','_self');


</script> 

<?php  

}
    else
    {
        ?>
        <script>
            alert('Username Or Password Dont match');
            window.open('admin.php','_self');
</script>
        <?php
    }
}


?>