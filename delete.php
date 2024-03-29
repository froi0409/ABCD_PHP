<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <title>Eliminación</title>
</head>
<body>
    <div class="barraPrincipal">
        <h1 class="tituloBarra">FABRICA "OMNISTO"</h1>
    </div>
    <?php
        //Configuraciones de la BDD
        $servername = 'localhost';
            $username = 'root';
            $password = 'admin123';
            $dbname = 'FABRICA';

            try {

                $identificador = $_POST['identificadorTrabajador'];
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "DELETE FROM trabajadores WHERE Id='$identificador'";

                $conn->exec($sql);
                echo("<h2>Se eliminó con éxito al usuario: $identificador</h2>");

            } catch(PDOException $e) {
                echo('<h2 class="textoError">No se pudo eliminar al trabajador</h2>');
                echo("<br><p>Error: $e</p>");
            }
    ?>
    <div align="center">
        <br><br>
        <a href="index.php">Volver a Inicio</a>
    </div>
</body>
</html>