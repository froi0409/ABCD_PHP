<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Actualización de datos</title>
</head>
<body>
    <?php
        //Configuraciones de la BDD
        $servername = 'localhost';
        $username = 'root';
        $password = 'admin123';
        $dbname = 'FABRICA';

        try {
            //Datos del trabajador
            $campo = $_POST['campo'];
            $identificador = $_POST['identificadorTrabajador'];
            $nuevoDato = $_POST['nuevoDato'];
            //conexión con mysql
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE trabajadores SET $campo" . "=" . "'$nuevoDato' WHERE Id = '$identificador'";
            $stmt = $conn->prepare($sql);

            $stmt->execute();

            echo("<h2>Se actualizó con éxito el campo $campo, con el dato $nuevoDato, del trabajador con código $identificador</h2>");
            
        } catch(PDOException $e) {
            echo('<h2 class="textoError">No se pudo ingresar al trabajador</h2>');
            echo("<br><p>Error: " . $e->getMessage() . "</p>");
        }
    ?>
</body>
</html>