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
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="signup.php"   id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="firstname" id="name" placeholder="First Name" required="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="lastname" id="name" placeholder="Last Name" required="" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="user" id="email" placeholder="Email" required="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="pass" id="password" placeholder="Password" required="" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" name="register" id="submit" class="form-submit" value="Sign up"/>
                         </div>
                           
                              <p>Have already an account ?  <a href="studentlogin.php" class="loginhere-link">Signup here</a>
                    </p>

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

if(isset($_POST['register'])){
    
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['user'];
    $password = $_POST['pass'];
   



    
        if($username==''||$password==''||$firstname==''||$lastname==''){

        ?>

        <script>
            alert('please fill username or password');
            window.open('signup.php','_self');
</script>
        <?php

    }
    
   $sql=" INSERT INTO `student_info`(FirstName,LastName,Email,Password) VALUES ('$firstname','$lastname','$username','$password')";
     if (mysqli_query($con, $sql)) {
        
        ?>

        <script>
            alert('Information inserted Succesfully');
            window.open('studentlogin.php','_self');
</script>
            
        <?php
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($con);
     }
     mysqli_close($con);
}


?>