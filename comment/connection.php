<html lang="en">
<?php
$charset= 'utf8';
$user = 'root';
$pass = '';
$dbname = 'comment';
$host = 'localhost';
$dsn="mysql:host=$host;dbname=$dbname;charset=$charset";
$opt = array(

PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

$db = new PDO($dsn, $user, $pass, $opt);

?>
</html>