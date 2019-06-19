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




