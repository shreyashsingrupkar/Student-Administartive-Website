

        

  <html>
  <head>
  	<link rel="stylesheet" type="text/css" href="css/mainallstudent.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  
  

  
  </head>

  <body>

  <div class="header">
  <a class="logo">STUDENT ADMINISTATIVE SYSTEM</a>
  <div class="header-right">
     <a href="logout.php">Logout</a>
  </div>
</div>

<h3 align="left"><a href="admindash.php" style="background:#4CAF50; color:#F8F9F9;">Back</a></h3>
        <table align="center" border="1" style="width:50%; margin-left: 25%; margin-top:-1%;">
            <tr>
                <th colspan="3">All Students</th>
            </tr>
            
               
                <td>Roll No</td>
                <td>First Name</td>
                   <td>LastName</td>
               </tr>


               <?php  
include('dbcon.php');


$qry1 = "SELECT RollNo,FirstName,LastName FROM `student_info` ORDER BY RollNo ASC";
    $run1 = mysqli_query($con,$qry1);

 





         if ($result = $con->query($qry1)) {
 
    /* fetch associative array */
    while ($data = $result->fetch_assoc()) {
    
            $roll=$data['RollNo'];
            $first=$data['FirstName'];
            $last=$data['LastName'];


    
     
         ?>
               <tr>
                <td align="center"> <?php echo "".$roll; ?>
</td>
               
        
              
                <td align="center"><?php echo "".$first; ?></td>
                 
            
            
          
                <td align="center"> <?php echo "".$last; ?></td>
                

            
            </tr>
            <?php
            }
 
    /* free result set <div class="foot" style=" margin-top: 1%;background-color: black;color: white;height: 85px;text-align: center;">
  Developed By<br>Shreyash Singrupkar<br>Copyright@2020
</div> */
    $result->free();
}
            ?>





           

    

  </body>
  </html>


