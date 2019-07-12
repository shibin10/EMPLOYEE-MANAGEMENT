<html>
<head>
<title>Admin Home</title>
<style>
body{
    <background-color>:whitesmoke;
}
input{
    width:40%;
    height:5%;
    border: 1px;
    border-radius:05px;
    padding:8px 15px 8px 15px;
    margin:10px 0px 15px 0px;
    box-shadow:1px 1px 2px 1px grey;
}
</style>
</head>
<body>
<center>
<h1>Edit Data</h1>
    <form action="" method="POST" >
        <input type="text" name="id" placeholder="Enter ID To Edit"/><br/>
        <input type="submit" name="search" value="search Data">
    </form>
   


<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'emp');


if(isset($_POST['search']))
{
    
    
    $id = $_POST['id'];
    $query = "select * FROM details WHERE id = '$id' ";
    $query_run = mysqli_query($connection,$query);

    if ($query_run)
    {
        if(mysqli_num_rows($query_run))
        {

  
    while($row = mysqli_fetch_array($query_run))
    {
        ?>
  <form action="" method="POST"  enctype="multipart/form-data">
 NAME<BR>
  <input type="text" name="name" value="<?php echo $row['name'] ?>"><br>
  EMAIL<BR>
  <input type="text" name="email" value="<?php echo $row['email'] ?>"><br>
  PHONE NUMBER<BR>
  <input type="text" name="phno" value="<?php echo $row['phno'] ?>"><br>
  JOB<BR>
  <input type="text" name="job" value="<?php echo $row['job']?>"><br>
  PASSWORD<BR>
  <input type="text" name="pass" value="<?php echo $row['pass']?>"><br>
 
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>"><br>
  <input type="file" name="image" id="image"><br>
  <input type="submit" name="edit" value="Edit Data">
</form>
<?php

    }



        }
   
}  


}

if( isset($_POST['edit']))
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
   
}
if($email=="" or !filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo"<script>alert('please enter the email')</script>";
    exit();
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
   
    
}
if($pass=="")
{
    echo"<script>alert('please enter the password')</script>";
    
    
}

else

{
 $s="update details set name='$_POST[name]',email='$_POST[email]',phno='$_POST[phno]',job='$_POST[job]',pass='$_POST[pass]', image='$imgContent' where id='$_POST[id]'";
if(mysqli_query($connection,$s))
echo"done";
else
echo "not update";
}
}}
?>
 </center>
</body>
</html>



<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2{font-family: "Raleway", sans-serif}
body, html {height: 100%}
p {line-height: 2}
.bgimg, .bgimg2 {
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
.bgimg {background-image: url("/images/e1.jpg")}
.bgimg2 {background-image: url("/images/e1.jpg")}
</style>
<body>
<!-- Navbar (sticky bottom) -->
<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
    <a  href="home.php" style="width:35%" class="w3-bar-item w3-button" >Logout</a>
    <a  href="adminhome.php" style="width:30%" class="w3-bar-item w3-button" >Home</a>
    <a  href="signup.php" style="width:35%" class="w3-bar-item w3-button" >Add A Profile</a>
    </div>
<div class="w3-hide-small" style="margin-bottom:32px"> </div>


</body>
</html>