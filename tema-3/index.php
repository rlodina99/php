<?php

    $DBH = new PDO("mysql:host=localhost;dbname=test;", "root")

?>

<h1>Lista masini</h1>
<table border=1>
<thead>
  <tr>
    <th>Nr</th><th>Marca</th><th>Capacitate</th>
  <tr>  
</thead>
<tbody>
  
    <?php

        $STH = $DBH->query('SELECT * FROM masini');
        $STH -> setFetchMode(PDO::FETCH_ASSOC);
        while($row = $STH->fetch()){
            echo "<tr>";
            echo "<td>" . $row['nr'] . "</td>";
            echo "<td>" . $row['marca'] . "</td>";
            echo "<td>" . $row['capacitate'] . "</td>";
            echo "</tr>";
        }
    ?>
   
  
<tbody>
</table>
