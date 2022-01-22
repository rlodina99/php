<?php

$db = new PDO("mysql:host=localhost;dbname=test;", "root")

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    #$_POST
   $sql = "insert into masini (nr, marca, capacitate) values('" . $_POST['nr'] . "' , '" . $_POST ['marca'] . "' , " . $_POST ['capacitate'] . ")" ;
//   echo $sql;
   $STH = $db->prepare($sql);
   $STH->execute();
   header('Location: ./index.php');
   die();
}
?>

<h1> Adaugare masina </h1>
<form action="./add.php" method="POST">
  <label for="nr">NR masina:</label><br>
  <input required type="text" id="nr" name="nr" ><br>
  <label for="marca">Marca:</label><br>
  <input required type="text" id="marca" name="marca"><br>
  <label for="capacitate">capacitate:</label><br>
  <input required type="number" id="capacitate" name="capacitate"><br>
  <input type="submit" value="Salveaza">
  <a href="index.php"> Renunta </a>
</form>