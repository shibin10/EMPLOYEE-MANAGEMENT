
<?php

if(!isset($_GET['email']))
{
    header( "Location: emplogin.php");
  exit();
}
$email=$_GET['email'];
$url="colgs.php?email=" .$email;
echo"See Your Collegues <a href='$url'>COLLEGUES</a>";

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
?>
</table>
</h5>
</center>
</body>
</html>






<!DOCTYPE html>
<html>
<title>MY HOME</title>



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

<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">WELCOME</h1>
    <h2>Are getting married</h2>
    <h2><b>17.07.2017</b></h2>
  </div>
</header>

<!-- Navbar (sticky bottom) -->
<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
    <a href="home.php" style="width:35%" class="w3-bar-item w3-button">Home</a>
    
    <a href="editpro.php" style="width:30%" class="w3-bar-item w3-button">Edit Profile</a>
    
  </div>
</div>
<div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>
</html>






