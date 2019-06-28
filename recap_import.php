<?php
session_start ();
$username = $_SESSION['login'];
$password = $_SESSION['password'];
$csvfile=$_POST["csvfile"];
?>

<!DOCTYPE html>
<html>
<title>Import</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="2;URL=admin.php">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-third w3-black w3-container w3-center">
    <div class="w3-padding-64">
      <h1>Import</h1>
    </div>
  </div>
  <div class="w3-three-quarters w3-blue-grey w3-container w3-center" style="height:700px">
    <div class="w3-center">
<?php
$csvfile=$_POST["csvfile"];

if(!file_exists($csvfile)) 
  {
    die("File not found. Make sure you specified the correct path.");
  }
  try 
  {
    
    $pdo = new PDO('mysql:host=localhost;dbname=projet', $username, $password,
                  array
                  (
                    PDO::MYSQL_ATTR_LOCAL_INFILE => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                  )
                  );
  } 
  catch (PDOException $e) 
  {
    die("database connection failed: ".$e->getMessage());
  }
  $sql = "LOAD DATA LOCAL INFILE '$csvfile' INTO TABLE eau FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' IGNORE 1 LINES" (REFERENCE, MARQUE, QUANTITE, PRIX, DATE_ACHAT);
  $pdo->exec($sql);
  
  echo "Importation terminée";

?>
</body>
</html>