


<?php
$connect=mysqli_connect("localhost","root","","emp");
if(isset($_POST['signup']))
{

	$check = getimagesize($_FILES["image"]["tmp_name"]);
	if($check !== false)
	{
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $job=$_POST['job'];
    $pass=$_POST['pass'];
	
    
if($name=="")
{
    echo"<script>alert('please enter the name')</script>";
    exit();
}
if($email=="" or !filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo"<script>alert('please enter the email')</script>";
exit();
}

if($imgContent=="" )
{
    echo"<script>alert('please post your Display Picture')</script>";
   
    
}

if($phno=="" )
{
    echo"<script>alert('please enter the mobile number')</script>";
   
    
}

else if(!preg_match("/^\d{10}+$/",$phno)){
	echo"<script>alert('please enter only 10 digits')</script>";	

}

if($job=="")
{
    echo"<script>alert('please enter the education')</script>";
    exit();
    
}

if($pass=="")
{
    echo"<script>alert('please enter the password')</script>";
    exit();
    
}
else
{
$querry="insert into details (email,pass,image,phno,job,name) values('$email','$pass','$imgContent','$phno','$job','$name')";
$qry=mysqli_query($connect,$querry);
if($qry)
{
	echo "File uploaded successfully.";
	header("Location:adminhome.php");
}
else
{
	echo "File size is too big";
}
}
		
	}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title> ADD A PROFILE </title>
	<form method="POST" enctype="multipart/form-data">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Add A Profile
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
                    </span>
                    
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate ="Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="phno" >
						<span class="focus-input100" data-placeholder="Phone no"></span>
                    </div>
                    
					
                    
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="job">
						<span class="focus-input100" data-placeholder="Job"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="file" name="image" id="image">
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="signup" >
							SIGN UP
                                
							</button>
						</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>




