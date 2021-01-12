
<?php

include('dbcon.php');

if(isset($_POST['submit'])){
    
    
    $rollno = $_POST['rollno'];
    $sb1 = $_POST['sb1'];
    $sb2 = $_POST['sb2'];
      $sb3= $_POST['sb3'];
       $sb4 = $_POST['sb4'];
        $sb5= $_POST['sb5'];
         $sb6 = $_POST['sb6'];

         
          $tm = $sb1+$sb2+$sb3+$sb4+$sb5+$sb6;

          $per=($tm*100)/600;
         
           $result = $_POST['result'];


   $sql1="INSERT INTO admin_student(RollNo,subject1,subject2,subject3,subject4,subject5,subject6,totalmarks,percentage,result) VALUES ('$rollno','$sb1','$sb2','$sb3','$sb4','$sb5','$sb6','$tm','$per','$result')";
     if (mysqli_query($con, $sql1)) {
        
       ?>


        <script>
            alert('Information inserted Succesfully');
            window.open('resultentry.php','_self');
</script>


       <?php
     } else {
        echo "Error: " . $sql1 . "
" . mysqli_error($con);
     }
     mysqli_close($con);
     }
   

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/main.css">
  
  <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/msg.css">
		<style>
			
h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      form {
      	width: 50%;
      	margin-top: 50px;
      	margin-left: 25%;
      display: flex;
      background: #fff;
      padding: 20px;
      }

      .textbox {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      box-shadow: 0 0 8px  #669999; 
      }
     
      
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
     
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
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

   <h3 align="left"><a href="admindash.php" style="background:#4CAF50; color:#F8F9F9;">Back</a></h3>

 
 	<div style="margin-left: 46%;">
          <h2>Result Entry<h2>
    </div>
</div>
  <form action="resultentry.php" method="POST">
	 <div class="testbox">
	 	<div style="width: 10%; margin-left: 45%;">
          <input id="fname" type="text" name="rollno" placeholder="Roll No" required/>
    </div>
      
        <div class="colums">

          <div class="item">
           
            <input id="fname" type="text" name="sb1" placeholder="Subject1" required/>
          </div>
          <div class="item">
           
            <input id="lname" type="text" name="sb2" placeholder="Subject2" required/>
          </div>
          <div class="item">
            
            <input id="address1" type="text"   name="sb3" placeholder="Subject3" required/>
          </div>
          <div class="item">
           
            <input id="address2" type="text"   name="sb4" placeholder="Subject4" required/>
          </div>
          <div class="item">
           
            <input id="state" type="text"   name="sb5"  placeholder="Subject5"required/>
          </div>
          <div class="item">
            
            <input id="zip" type="text" name="sb6" placeholder="Subject6" required/>
          </div>
          
         
        </div>
        <div style="width: 10%; margin-left: 45%;">
          <input id="fname" type="text" name="result" placeholder="Result" required/>
    </div>
                <div class="btn-block">
          <input type="submit" name="submit" value="Submit"></input>
        </div>
    
    </div>
      </form>
 <div class="footer">
  <p> <br>Developed By<br>Shreyash Singrupkar<br>Copyright@2020</p>
</div>

</body>
</html>
