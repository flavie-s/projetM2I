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
    <div class="w3-padding-64">
      <h1>Stock Eau</h1>
    </div>
  </div>
  <div class="w3-three-quarters w3-blue-grey w3-container w3-center" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <?php
      $servername = "localhost";
      $username = "test";
      $password = "test";

      try {
        $conn = new PDO('mysql:host=localhost;dbname=projet', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
      catch(PDOException $e) 
        {
        echo 'Connection failed: ' .$e->getMessage();
        }
        $conn->exec("SET CHARACTER SET utf8");

      $retour = $conn->query('SELECT * FROM eau');

      while ($data = $retour->fetch()){

        echo $data['ID'].' '.$data['REFERENCE'].' '.$data['QUANTITE'].' '.$data['PRIX'].' '.$data['DATE_ACHAT'].')<br>';

      }

      $conn = null;
      ?>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-black w3-padding-16">
  <p>Admin <a href="http://10.1.24.197/projetM2I/login.html" target="_blank">login</a></p>
</footer>

</body>
</html>
