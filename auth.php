<?php
session_start ();
if(!isset($_POST['login']) && !isset($_POST['password']))
{
  header('Location: login.php');
  Exit;
}
else {
  try {
    $connection = new PDO('mysql:host=localhost;dbname=projet',$_POST['login'],$_POST['password']);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'babar <br>';
    //sleep(3);
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: admin.php');
  }
  catch(PDOException $e)
  {
    echo 'Connection failed: ' . $e->getMessage() .'<br>';
    header('Location: login.php');
  }
}
?>