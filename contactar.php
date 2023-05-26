<html>
    <body>
        <?php
        $nombre =$_POST['nombre'];
        $correo = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $db = new SQLite3('consultas.db');
        $fecha = date("D M d, Y G:i");
        $stmt = $db->prepare("INSERT INTO consultas(nombre,correo,asunto,mensaje,fecha) VALUES(:nombre,:correo,:asunto,:mensaje,:fecha)");
        $stmt->bindValue(':nombre', $nombre, SQLITE3_TEXT);
        $stmt->bindValue(':correo', $correo, SQLITE3_TEXT); 
        $stmt->bindValue(':asunto', $asunto, SQLITE3_TEXT); 
        $stmt->bindValue(':mensaje', $mensaje, SQLITE3_TEXT); 
        $stmt->bindValue(':fecha', $fecha, SQLITE3_TEXT);    
        $stmt->execute();
        $db->close();
        header("Location: index.html");
        die();
        ?>
    </body>
</html>