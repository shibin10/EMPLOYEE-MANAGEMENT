<?php
mysql_connect('localhost','root','');
mysql_select_db('emp');
$sql ="select * from details";
$records=mysql_query($sql);
?>

<html>
<head>
<title> Employee Data</title>
</head>

<body>
<table width="600" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>ID</th>
<th>NAME</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>JOB</th>
   
  </tr>
<?php
while($employee=mysql_fetch_assoc($records))
{
  echo"<tr>";
  echo "<td>",$employee['id'],"</td>";
  echo "<td>",$employee['name'],"</td>";
  echo "<td>",$employee['email'],"</td>";
  echo "<td>",$employee['phno'],"</td>";
  echo "<td>",$employee['job'],"</td>";
 
  echo"</tr>";
}
?>
</table>

</body>
</html>




<html>
<body>
<center>
<form action="" method="POST">
<input type="text" name="id" placeholder="Enter ID To Edit"/><br/>
<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
<button class="login100-form-btn" name="edit" value="Search Data" >
							Edit
							</button>

              <?php
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('emp');

if(isset($POST['search']))
{
    $id=$_POST['id'];
    $query="select * from emp where id='$id'";
    $query_run=mysql_query($con,$query);

    while($row=mysql_fetch_array($query_run))
    {
        ?>




        <form action="" method="POST">


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
						Edit Your Profile
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
                    </span>

        <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name" value="<?php echo$row['name']?>">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="email" value="<?php echo$row['email']?>">
						<span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                            
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="phno:" value="<?php echo$row['phno']?>" >
						<span class="focus-input100" data-placeholder="Phone no"></span>
                    </div>
                    
					
                    
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="job" value="<?php echo$row['job']?>">
						<span class="focus-input100" data-placeholder="Job"></span>
					</div>

                        </div>


<?php
    }
}
?>
</html>
</body>