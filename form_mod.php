<?php
session_start();
$_SESSION['brand']=$_POST["marque"];
$sbrand=$_SESSION['brand'];
$username = $_SESSION['login'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<title>Form Mod</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-third w3-black w3-container w3-center">
    <div class="w3-padding-64">
      <h1>Modifications</h1>
    </div>
  </div>
  <div class="w3-three-quarters w3-blue-grey w3-container w3-center" style="height:700px">
    <div class="w3-center">
 		<form action="recap_mod.php" method="post">
  		Référence :<br>
  		<input type="text" name="reference" ><br><br>
  		Quantité :<br>
  		<input type="text" name="quantite" ><br><br>
  		Prix :<br>
  		<input type="text" name="prix" ><br><br>
  		Date d'achat (année-mois-jour) :<br>
  		<input type="text" name="date_achat" ><br><br>

  		<input type="submit" value="Submit">
</form> 
</body>
</html>