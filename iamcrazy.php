<?php
session_start ();
$username = $_SESSION['login'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<title>YOU ARE CRAZY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-third w3-black w3-container w3-center">
    <div class="w3-padding-60">
      <h1>YOU ARE CRAZY</h1>
    </div>
  </div>
  <div class="w3-three-quarters w3-blue-grey w3-container w3-center" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <h1>On va tous mourir !</h1>
      <img src="http://media.topito.com/wp-content/uploads/2016/12/newton.aspx_.jpg" class="w3-margin w3-circle" alt="Person" style="width:50%">

</div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-black w3-padding-16">
  <p>Oui... <a href="boom.php">je suis dingue</a></p>
</footer>

</body>
</html>
