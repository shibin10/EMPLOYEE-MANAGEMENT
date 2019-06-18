



if (isset($_POST['edit'])) {
    $id=$_POST['id'];
 $name= $_POST['name'];
    $phno = $_POST['phno'];
    $email =$_POST['email'];
    $job = $_POST['job'];
    $pass = $_POST['pass'];
    $query = "update details SET name='$name',email='$email', phno='$phno', job='$job',pass='$pass' where id='$id'";
   $res = mysql_query($query) or  die("couuld not update");
  
    }
    }
}
}
}   
?>
 </center>
</body>
</html>



