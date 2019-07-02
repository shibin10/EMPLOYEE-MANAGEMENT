<?php
mysql_connect('localhost','root','');
mysql_select_db('emp');
$sql ="select * from details";
$records=mysql_query($sql);
?>

<html>
<head>
<title> Employee Data</title>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
</style>

</head>

<body>
<table width="600" border="2" cellpadding="2" cellspacing="2" table id="t01">
<tr>
<th>ID</th>
<th>NAME</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>JOB</th>
    <th>PASSWORD</th>

  </tr>
<?php
while($employee=mysql_fetch_assoc($records))
{
  ?>
  <tr>
 
   <?php echo "<td>",$employee['id']?>
   <?php echo "<td>",$employee['name']?>
   <?php echo "<td>",$employee['email']?>
  <?php echo "<td>",$employee['phno']?>
   <?php echo "<td>",$employee['job']?>
   <?php echo "<td>",'<img src="data:image/jpeg;base64,'.base64_encode($employee['image']).'" height="100" width="100" >';?>
  </tr>
  <?php
}
?>
</table>

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
    <a  href="edit.php" style="width:30%" class="w3-bar-item w3-button" >Edit A Profile</a>
    <a  href="signup.php" style="width:35%" class="w3-bar-item w3-button" >Add A Profile</a>
    </div>
<div class="w3-hide-small" style="margin-bottom:32px"> </div>


</body>
</html>