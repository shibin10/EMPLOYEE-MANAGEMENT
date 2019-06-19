<?php
if (!isset($_GET['username']))
{

    header( "Location: index.php");
  exit();
}
$username=$_GET['username'];

echo"hello $username";
?>