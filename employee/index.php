<?php
if (isset($_POST['username']))
{
    $username=$_POST['username'];
    $url="script.php?username=" . $username;
    header( 'Location:'. $url);
  exit();
}
?>


<html >
    <body>
        <form action="index.php" method="POST">
            <input type="text" name="username">username</label>
            <input type="submit" name="submit" value="submit">
</form>
</body>
    </html>
