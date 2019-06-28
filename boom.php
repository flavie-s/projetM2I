<?php
session_start ();
$username = $_SESSION['login'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<title>BOOM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="3;URL=admin.php">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">

  <div class="w3-three-quarters w3-blue-grey w3-container w3-center" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <img src="https://www.investigaction.net/wp-content/uploads/2018/02/ob_36db2b_madman-theory-nuclear-trump.jpg" class="w3-center" alt="Person" style="width:70%">
<?php

$servername = "localhost";

    try {
        $conn = new PDO('mysql:host=localhost;dbname=projet', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "TRUNCATE eau";
        $conn->exec($sql);
        echo "Bravo, vous avez tout foutu en l'air";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
</div>
  </div>
</div>

</body>
</html>
