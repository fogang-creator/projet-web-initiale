
<?php
$dbHost='localhost';
$dbUser='root';
$dbPasseword='';
$dbName='smartlady';



//$pdo=null;
$dsn='mysql:host=localhost; port=3306; dbname=smartlady';
$dbUser='root';
$pw='';




$pdo=new PDO($dsn, $dbUser, $pw);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>