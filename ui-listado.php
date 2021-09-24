<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listado Trabajadores</title>
</head>
<body>
    <h1>Trabajadores de la Fabrica</h1>
    <table style='border: solid 1px black;'>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Genero</th>
            <th>Salario</th>
        </tr>
        <?php 
        
        class TableRows extends RecursiveIteratorIterator {
            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);
            }
        
            function current() {
                return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
            }
        
            function beginChildren() {
                echo "<tr>";
            }
        
            function endChildren() {
                echo "</tr>" . "\n";
            }
        }

        //Configuraciones de la BDD
        $servername = 'localhost';
        $username = 'root';
        $password = 'admin123';
        $dbname = 'FABRICA';

        try {
            
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT " . "*" . " FROM trabajadores");
            $stmt->execute();
          
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                echo $v;
            }

            
        } catch(PDOException $e) {
            echo('<h2 class="textoError">No se pudo generar la lista de trabajadoresr</h2>');
            echo("<br><p>Error: " . $e->getMessage() . "</p>");
        }

        ?>
    </table>
</body>
</html>