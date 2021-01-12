<?php
include('dbcon.php');
session_start();
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
                    <form method="POST" action="studentlogin.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Log in</h2>
                       
                        <div class="form-group">
                            <input type="email" class="form-input" name="uname" id="email" placeholder="Email" required="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="pass" id="password" placeholder="Password" required="" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        
                        
                        <div class="form-group">
                            <input type="submit" name="login" id="submit" class="form-submit" value="Login"/>
                        </div>
                    </form>
                    <p>
                        create an account ? <a href="signup.php" class="loginhere-link">Signup here</a>
                    </p>
                     
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



if(isset($_POST['login'])){
    
    $username = $_POST['uname'];
    $password = $_POST['pass'];

     $_SESSION['user']=$username;
    $_SESSION['pass']=$password;


    if($username==''||$password==''){

        ?>

        <script>
            alert('please fill username or password');
            window.open('studentlogin.php','_self');
</script>
        <?php

    }
    
    $qry1 = "SELECT 'Email','Password' FROM `student_info` WHERE Email = '$username' AND Password = '$password'";
    
    $run1 = mysqli_query($con,$qry1);
    
    $row = mysqli_num_rows($run1);
    
    if($row==1)
    {
       
        ?>
        <script>
            alert('login succesful');  
</script> 

            

 <?php 
 		header('location:studentdash.php');
}
    else
    {
        ?>
        <script>
            alert('Username Or Password Dont match');
            window.open('studentlogin.php','_self');
</script>
        <?php
    }
}


?>