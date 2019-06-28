<!DOCTYPE html>
<html>
<title>Stock Presentation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-third w3-black w3-container w3-center">
    <div class="w3-padding-60">
      <h1>Stock Eau</h1>
    </div>
  </div>
  <div class="w3-three-quarters w3-blue-grey w3-container w3-center" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <?php
      echo "<table style='border: solid 1px black;'>";
echo "<tr><th>REFERENCE</th><th>MARQUE</th><th>QUANTITE</th><th>PRIX</th><th>DATE_ACHAT</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

      $servername = "localhost";
      $username = "péquenaud";
      $password = "paysan";

      try {
        $conn = new PDO('mysql:host=localhost;dbname=projet', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$stmt = $conn->prepare("SELECT REFERENCE, MARQUE, QUANTITE, PRIX, DATE_ACHAT FROM eau");
    	$stmt->execute();

    	// set the resulting array to associative
    	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    	foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        	echo $v;
    	}
	  }
	  catch(PDOException $e) {
    	echo "Error: " . $e->getMessage();
	  }
	  $conn = null;
 	  echo "</table>";
      ?>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-black w3-padding-16">
  <p>Admin <a href="login.php" target="_blank">login</a></p>
</footer>

</body>
</html>
