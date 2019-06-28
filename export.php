<?php
session_start ();
$username = $_SESSION['login'];
$password = $_SESSION['password'];
?>
<?php
    
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=projet', $username, $password);
} catch (PDOException $e) {
    // error handler
}

header('Content-type: text/csv');
header('Content-Disposition: attachment; filename="filename.csv"');

try {
    $stmt = $pdo->prepare("SELECT * FROM eau");
    $stmt->execute();
    $output = fopen('php://output', 'w');
    $header = true;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if ($header) {
            fputcsv($output, array_keys($row));
            $header = false;
        }
        fputcsv($output, $row);
    }
    fclose($output);
} catch (PDOException $e) {
    // error handler
}
?>