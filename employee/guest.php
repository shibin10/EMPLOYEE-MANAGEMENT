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
 <form action="" method="POST" enctype="multipart/form-data">
<table width="600" border="2" cellpadding="1" table id="t01">
<tr>
<th>ID</th>
<th>NAME</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>JOB</th>
    <th>IMAGE</th>
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




