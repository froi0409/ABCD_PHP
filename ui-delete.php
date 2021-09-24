<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <title>Eliminar Trabajador</title>
</head>
<body>
    <div class="barraPrincipal">
        <h1 class="tituloBarra">FABRICA "OMNISTO"</h1>
    </div>
    <h1>Eliminar Trabajador</h1>
    <h3>Ingrese el código del trabajador a eliminar:</h3>
    <form action="delete.php" method="POST">
        <div align="center">
            <label for="identificadorTrabajador">Codigo: </label>
            <input type="text" placeholder="ej: 202100001" id="identificadorTrabajador" name="identificadorTrabajador"/>
            <br><br><br>
            <button>Eliminar Trabajador</button>
        </div>
    </form>
    <div align="center">
        <br><br>   
        <a href="index.php">Volver a Inicio</a>
    </div>
</body>
</html>