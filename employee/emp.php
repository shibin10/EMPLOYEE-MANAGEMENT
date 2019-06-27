
<?php
session_start();
if(!isset($_SESSION['email']))
{
    header(  "Location: emplogin.php");
  exit();
}
$email=$_SESSION['email'];


mysql_connect('localhost','root','');
mysql_select_db('emp');
$sql ="select * from details where email='$email' limit 1";
$records=mysql_query($sql);


?>

<html>
<head>
<title> Employee Data</title>
</head>

<body>
<center>
<h5>
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

if (isset($_POST['home']))
{
  session_destroy();
  header(  "Location: home.php");
}
?>
</table>
</h5>
</center>
</body>
</html>






<!DOCTYPE html>
<html>
<title>MY HOME</title>


<form action="" method="POST"
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
    <a  href="editpro.php" style="width:35%" class="w3-bar-item w3-button" name="home">Home</a>
  
    <a href="test.php" style="width:30%" class="w3-bar-item w3-button">Edit Profile</a>
    <a href="colgs.php" style="width:30%" class="w3-bar-item w3-button">Collegues</a>
</div>
<div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>
</html>
<?php



?>





