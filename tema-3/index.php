<html>

<head></head>

<?php

$DBH = new PDO("mysql:host=localhost;dbname=test;", "root")

?>

<body>

    <h1>Lista masini</h1>
    <table border=1>
        <thead>
            <tr>
                <th>Nr</th>
                <th>Marca</th>
                <th>Capacitate</th>
                <th>Stergere</th>
                <th>Modifica</th>
            <tr>
        </thead>
        <tbody>

            <?php

            $STH = $DBH->query('SELECT * FROM masini');
            $STH->setFetchMode(PDO::FETCH_ASSOC);
            while ($row = $STH->fetch()) {
                echo "<tr>" .
                     "<td>" . $row['nr'] . "</td>" .
                     "<td>" . $row['marca'] . "</td>" .
                     "<td>" . $row['capacitate'] . "</td>" .
                     "<td> <a href='./del.php?id=" . $row['id'] . "'> X </a> </td> ".
                     "<td> <a href='./update.php?id=" . $row['id'] . "'> X </a> </td> ".
                     "</tr>";
            }
            ?>


        </tbody>
    </table>

  <a href="add.php"> Adauga masina </a>


</body>

</html>