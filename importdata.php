<?php
session_start ();
$username = $_SESSION['login'];
$password = $_SESSION['password'];
?>
<?php 

$pdo = new PDO('mysql:host=localhost;dbname=projet', $username, $password);
 
$csv_file =  $_FILES['csv_file']['tmp_name'];
if (is_file($csv_file)) {
    $input = fopen($csv_file, 'a+');
    // if the csv file contain the table header leave this line
    $row = fgetcsv($input, 1024, ','); // here you got the header
    while ($row = fgetcsv($input, 1024, ',')) {
        // insert into the database
        $sql = 'INSERT INTO eau(REFERENCE, MARQUE, QUANTITE, PRIX, DATE_ACHAT) VALUES(:REFERENCE, :MARQUE, :QUANTITE, :PRIX, :DATE_ACHAT)';
        $query = $pdo->prepare($sql);
        $query->bindParam(':REFERENCE', $row[1], PDO::PARAM_STR);
        $query->bindParam(':MARQUE', $row[2], PDO::PARAM_STR);
        $query->bindParam(':QUANTITE', $row[3], PDO::PARAM_INT);
        $query->bindParam(':PRIX', $row[4], PDO::PARAM_INT);
        $query->bindParam(':DATE_ACHAT', $row[5], PDO::PARAM_INT);
        $query->execute();
    }
}
 
// redirect to the index page
header('location: admin.php');
?>