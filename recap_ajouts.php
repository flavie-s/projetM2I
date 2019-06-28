<?php
session_start ();
$username = $_SESSION['login'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<title>Recap_ajouts</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="2;URL=admin.php">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">
<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-third w3-black w3-container w3-center">
    <div class="w3-padding-64">
      <h1>Recap Ajouts</h1>
    </div>
  </div>
  <div class="w3-three-quarters w3-blue-grey w3-container w3-center" style="height:700px">
    <div class="w3-center">
<?php
$ref=$_POST["reference"];
$brand=$_POST["marque"];
$quant=$_POST["quantite"];
$prix=$_POST["prix"];
$achat=$_POST["date_achat"];

$servername = "localhost";

    try {
        $conn = new PDO('mysql:host=localhost;dbname=projet', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO eau VALUES ('$ref', '$brand', '$quant', '$prix', '$achat')";
        $conn->exec($sql);
        echo "Ajout terminé, vous allez être redirigée";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
?>
</body>
</html>