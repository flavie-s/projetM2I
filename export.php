<?php
session_start ();
$username = $_SESSION['login'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<title>Export</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-third w3-black w3-container w3-center">
    <div class="w3-padding-64">
      <h1>Export</h1>
    </div>
  </div>
  <div class="w3-three-quarters w3-blue-grey w3-container w3-center" style="height:700px">
    <div class="w3-center">
<?php

      $servername = "localhost";
 fputcsv (resource $handle, array $fields [, string $delimiter = "," [, string $enclosure = '"' [, string $escape_char = "\\" ]]]) : int

      try {
        $conn = new PDO('mysql:host=localhost;dbname=projet', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$stmt = $conn->prepare("SELECT REFERENCE, MARQUE, QUANTITE, PRIX, DATE_ACHAT FROM eau");
    	$stmt->execute();

    	// set the resulting array to associative
    	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        print_r($result);
        $handle=fopen("/var/www/html/projetM2I/Saves/export.csv", "w");
        foreach($result as $fields);
            fputcsv($handle, $fields);
        endforeach;
        fclose($handle);
    	}

	  catch(PDOException $e) {
    	echo "Error: " . $e->getMessage();
	  }
?>
    </div>
  </div>
</div>

</body>
</html>
