<?php

$DBH = new PDO("mysql:host=localhost;dbname=test;", "root");

$sql = "delete from masini where id =". $_GET['id'] ;

$STH = $DBH->prepare($sql);
$STH->execute();
header('Location: ./index.php');
?>

