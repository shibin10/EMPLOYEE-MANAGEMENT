
<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <body>
        <form action="script.php" method="post">
            <label for="username"><input type="test" name="username">username</label>
            <input type="submit" name="submit" value="submit">
</form>
</body>
    </html>



<?php
if(isset($_SESSION['test'])&& !empty($_SESSION['test']))
{
  echo $_SESSION['test'].'</br>';
}
if(isset($_SESSION['error-message'])&& !empty($_SESSION['error-message']))
{
  echo $_SESSION['error-message'].'</br>';
}
session_destroy();
?>





<?php
session_start();
$_SESSION['test']='test';
$_SESSION['error-message']='error';
if(isset($_SESSION['submit'])&& !empty($_SESSION['submit']))
{
  header(   'location: index.php');
}
?>


