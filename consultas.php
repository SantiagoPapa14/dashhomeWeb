<html>
    <body>
    <?php
    $connection = new SQLite3('consultas.db');
    $results = $connection->query('SELECT * FROM consultas');
    while($row=$results->fetchArray(SQLITE3_ASSOC)){
        echo $row['fecha'] . " ; ";
        echo $row['nombre'] . " ; ";
        echo $row['correo'] . " ; ";
        echo $row['asunto'] . " ; ";
        echo $row['mensaje'] . "<br>";
    }
?>
    </body>
</html>