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
    <form action="" method="POST">
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
  <form action="" method="POST">
 
  <input type="text" name="name" value="<?php echo $row['name'] ?>"><br>
  <input type="text" name="email" value="<?php echo $row['email'] ?>"><br>
  <input type="text" name="phno" value="<?php echo $row['phno'] ?>"><br>
  <input type="text" name="job" value="<?php echo $row['job']?>"><br>
  <input type="text" name="pass" value="<?php echo $row['pass'] ?>"><br>
  <input type="text" name="id" value="<?php echo $row['id'] ?>"><br>
  <input type="submit" name="edit" value="Edit Data">
</form>
<?php

    }

        }
}   }
?>
 </center>
</body>
</html>


