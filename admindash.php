<?php
session_start();
require('admincheck.php');


?>


<html>
    <head>
        <meta charset ="UTF-8">
        <link rel="stylesheet" href="index.css">
        <script src="jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <title> Student Management System</title>

       
         <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">



<style>
.education{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
  cursor: pointer;
}
.personal {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  
  cursor: pointer;
}

}

</style>

        
    </head>
    <body>
        <div class="header">
  <a class="logo">STUDENT ADMINISTATIVE SYSTEM</a>
  <div class="header-right">
    
    <a href="adminlogout.php">Logout</a>
  </div>
</div>
        
       
        <h2 align="center" style="color:black;"> Welcome Admin</h2>
        
        
        <form method="post" action="" >
            <table style="width:50%; margin-left: 25%;margin-top: 5;" align="center" border="1">
                <tr>
                    <td colspan="3" align="center">Admin Dashboard</td>
                </tr>
                
                <tr>
                    <td colspan="2">Enter Rollno</td>
                    <td><input type="text" name="rollno" required=""></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" name="submit" value="Show Info"></td>
                </tr>
                 <tr>
                    <td colspan="1" align="center" style="color: red ">All Students::<a class="education" href="allstudent.php" style="background:#4CAF50; color:#F8F9F9; hover:background-color:red;">Show</a></td>
                
                
                    <td colspan="1" align="center" style="color: red ">Update Student Educational Data::<a class="education" href="update.php" style="background:#4CAF50; color:#F8F9F9; hover:background-color:red;">Update</a></td>
                
                
                    <td colspan="1" align="center" style="color: red ">Create Result::<a class="education" href="Resultentry.php" style="background:#4CAF50; color:#F8F9F9; hover:background-color:red;">Create</a></td>
                </tr>
               
            </table>
            

                                   
        </form>
             <div class="footer">
  <p> <br>Developed By<br>Shreyash Singrupkar<br>Copyright@2020</p>
</div>
            
        
        
        
    </body>
    
</html>

<?php

if(isset($_POST['submit'])){
    
   
    $rollno = $_POST['rollno'];
    
    include('dbcon.php');
    include('adminfun.php');
        
    showdetails($rollno);
    
    
    
    
    
    
}

?>