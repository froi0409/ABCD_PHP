<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/base.css" rel="stylesheet" type="text/css">
        <title>Nombre del Trabajador</title>
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
                //Datos del trabajador
                $identificador = $_POST['identificadorTrabajador'];
                $nombre = $_POST['nombreTrabajador'];
                $apellido = $_POST['apellidoTrabajador'];
                $direccion = $_POST['direccionTrabajador'];
                $genero = $_POST['generoTrabajador'];
                $salario = $_POST['salarioTrabajador'];

                //conexión con mysql
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "INSERT INTO trabajadores VALUES('$identificador', '$nombre', '$apellido', '$direccion', '$genero', '$salario')";

                $conn->exec($sql);

                echo('<h2>Se registro con exito al usuario ' . $identificador . '</h2>');
                
            } catch(PDOException $e) {
                echo('<h2 class="textoError">No se pudo ingresar al trabajador</h2>');
                echo("<br><p>Error: $e</p>");
            }

            $conn = null;

        ?>

    <div align="center">
        <br><br>
        <a href="index.php">Volver a Inicio</a>
    </div>

    </body>
</html>