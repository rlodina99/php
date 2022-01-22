<?php

$DBH = new PDO("mysql:host=localhost;dbname=test;", "root");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $sql = "update masini set nr = '". $_POST['nr']."', marca = '".$_POST['marca'] ."', capacitate = '".$_POST['capacitate']."'   where id = " . $_POST['id'];
//   echo $sql;
try {
   $STH = $DBH->prepare($sql);
   $STH->execute();
   header('Location: ./index.php');
   die();
}
catch (Exception $e){
    echo 'Eroare: ' . $e->getMessage();
}
}


?>



<?php
    $STH = $DBH->query('SELECT * FROM masini where id = ' . $_GET['id']);
    $STH->setFetchMode(PDO::FETCH_ASSOC);
    $row = $STH->fetch()
?>

<h1> Modifica masina </h1>
<form action="./update.php" method="POST">
    <input type='hidden' name='id' value=<?= $row['id'] ?> /> 
    <label for="nr">NR masina:</label><br>
    <input required type="text" id="nr" name="nr" value=<?= $row['nr'] ?>> <br>
    <label for="marca">Marca:</label><br>
    <input required type="text" id="marca" name="marca" value=<?= $row['marca'] ?>> <br>
    <label for="capacitate">capacitate:</label><br>
    <input required type="number" id="capacitate" name="capacitate" value=<?= $row['capacitate'] ?>> <br>
    <input type="submit" value="Modifica">
    <a href="index.php"> Renunta </a>
</form>