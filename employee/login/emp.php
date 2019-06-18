<?php
session_start();
?>



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
    <a href="home.php" style="width:25%" class="w3-bar-item w3-button">Home</a>
    <a href="mypro.php" style="width:25%" class="w3-bar-item w3-button">My Profile</a>
    <a href="editpro.php" style="width:25%" class="w3-bar-item w3-button">Edit Profile</a>
    <a href="colgs.php" style="width:25%" class="w3-bar-item w3-button w3-hover-black">Collegues</a>
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
<div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>
</html>


<?php
if(isset($_SESSION['email'])&& !empty($_SESSION['email']))
{
  echo $_SESSION['email'].'</br>';
}
if(isset($_SESSION['error-message'])&& !empty($_SESSION['error-message']))
{
  echo $_SESSION['error-message'].'</br>';
}
session_destroy();
?>




