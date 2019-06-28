<?php
session_start ();
$username = $_SESSION['login'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<title>RAGNAROK</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-third w3-black w3-container w3-center">
    <div class="w3-padding-60">
      <h1>RAGNAROK</h1>
    </div>
  </div>
  <div class="w3-three-quarters w3-blue-grey w3-container w3-center" style="height:700px">
    <div class="w3-padding-64 w3-center">
<form action="iamcrazy.php" method="post">
  		Pas de retour en arrière... Si vous voulez vraiment supprimer les données :<br>
<input type="submit" name="submit" value="I am crazy"/>
</form>
    </div>
  </div>
</div>
</body>
</html>
