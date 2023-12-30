<!DOCTYPE HTML>
<html>
<head>
<title>REGTRATION</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php

include 'dbcon.php';

 if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($con, $_POST['name']);
   $edu =mysqli_real_escape_string($con, $_POST['education']);
   $gen =mysqli_real_escape_string($con,$_POST['gender']);
   $phone =mysqli_real_escape_string($con,$_POST['phone']);
   $email =mysqli_real_escape_string($con,$_POST['email']);
   $pass =mysqli_real_escape_string($con,$_POST['password']);
   $cpss =mysqli_real_escape_string($con,$_POST['cpassword']);
   $comment =mysqli_real_escape_string($con,$_POST['comment']);



   // $pass = password_hash($pass, PASSWORD_ BCRYPT);

   $quary = mysqli_query($con, "SELECT * From registration WHERE Email='$email'");
  
   $ecount = mysqli_num_rows($quary);
   
   if($ecount>0){
    ?>
      <script> alert("Already Registered")</script>
    <?php
   }
   else{
     if($pass===$cpss){
        $inquery = "insert into registration ( Name, Education, Gender, Mobile, Email, Password, Comment) 
        VALUES ('$name','$edu','$gen','$phone','$email','$pass','$comment')";

        $iquary = mysqli_query($con, $inquery);

        if ($iquary) {
          ?>
              <script> alert("Data Stored")</script>
            <?php
          }
          else{
            ?>
            <script> alert("Connection Error")</script>
          <?php
          }
     }else{
      ?>
      <script> alert("Re-Enter PAssword")</script>
      <?php
     }
     
    }
 }
 ?> 
<style>.nav-home{
border: 2px solid rgb(204, 114, 5);
background: darkorange;}</style>

 
<div>
<?php 
include 'header.php'?>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				  <div class="panel-heading">Register</div>
				  <div class="panel-body">
				<form method="POST" id="form1">
				    <div class="form-group has-feedback">

        <input name="name" type="text" size="25" placeholder="Name" required class="form-control"/>
        
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <select name="education" required class="form-control">
            <option value>Education</option>
            <option>PG</option>
            <option>UG</option>
            <option>SSC</option>
            <option>HSC</option>
            <option>Primary</option>
        </select>
        
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select name="gender" required class="form-control">
            <option value>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="phone" required  type="number" size="12" placeholder="Mobile Number" class="form-control"/>
        
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="email" required type="text" size="25" placeholder="Email" class="form-control"/>
        
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" required  type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
       
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="cpassword" required type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" />
        
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label for="comment"style="color:gray;">Share Your-Odyssey</label>
          <textarea name="comment" class="form-control" rows="5" ></textarea>
       
        
      </div>
      <div class="form-group">
          <button type="submit" name= "submit" class="btn btn-primary">Continue</button>
      </div>
      </div>
  </div>
    </form>
			</div>
		</div>
		
		
	</div>
</div>
  
</body>
</html>