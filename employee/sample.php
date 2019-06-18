<?php
$connect=mysqli_connect("localhost","root","","emp");
if(isset($_POST['login']))
{
   
    $email=$_POST['email'];
	$pass=$_POST['pass'];
	
	$querry="select * from details where email='"+$email+"'and pass='"+$pass+"'";
	$qry=mysqli_query($connect,$querry);
 
	 if($qry){
		 echo"<h3> you have successfully logged in</h3>";
		 exit();
	 }
	 else{
		 echo" you hav entered wrong password";
		 exit();
	 }
 }
?>


<?php
$host="localhost";
$user="root";
$password="";
$db="emp";

mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['login']))
{
   
    $email=$_POST['email'];	
	$pass=$_POST['pass'];
	
	$querry="select * from details where email='"+$email+"'and pass='"+$pass+"'limit 1";
	$qry=mysql_query($querry);
 
	 if($qry)
	{
		 echo"<h3> you have successfully logged in</h3>";
		 exit();
	 }
	 else{
		 echo" you hav entered wrong password";
		 exit();
	 }
 }
?>


<?php
$connect=mysqli_connect("localhost","root","","emp");
if(isset($_POST['login']))
{
   
    $email=mysqli_real_escape_string($connect,$_POST['email'];
	$pass=mysqli_real_escape_string($connect,$_POST['pass'];
	
	$querry="select * from details where email='$email'and pass='$pass'";
	$qry=mysqli_query($connect,$querry);
 $row=mysqli_fetch_array($qry,mysqli_assoc);
 $count=mysqli_num_rows($qry)
	 if($count==1){
		 echo"<h3> you have successfully logged in</h3>";
		 exit();
	 }
	 else{
		 echo" you hav entered wrong password";
		 exit();
	 }
 }
?>




<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>

</body>
</html>




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
<th>NAME</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>JOB</th>
    <th>pass</th>
  </tr>
<?php
while($employee=mysql_fetch_assoc($records))
{
  echo"<tr>";
  echo "<td>",$employee['name'],"</td>";
  echo "<td>",$employee['email'],"</td>";
  echo "<td>",$employee['phno'],"</td>";
  echo "<td>",$employee['job'],"</td>";
  echo "<td>",$employee['pass'],"</td>";
  echo"</tr>";
}
?>
</table>

</body>
</html>



<html>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter ID To Edit"/><br/>
        <input type="submit" name="submit" value="search Data">
    </form>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'emp');


if(isset($_POST['submit ']))
{
    $id=$_POST['name'];
    $query="select * from details where name='$id'";
    $query_run=mysqli_query($con,$query);

    while($row=mysqli_fetch_array($query_run))
    {
        ?>
  <form action="" method="POST">

  <input type="text" name="id" value="<?php echo $row['id']; ?>">
  <input type="text" name="name" value="<?php echo $row['name']; ?>">
  <input type="text" name="email" value="<?php echo $row['email']; ?>">
  <input type="text" name="phno" value="<?php echo $row['phno']; ?>">
  <input type="text" name="job" value="<?php echo $row['job']; ?>">
  <input type="text" name="pass" value="<?php echo $row['pass']; ?>">

</form>
<?php
    }
}   
?>


