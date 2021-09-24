<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <title>Modificar Información</title>
</head>
<body>
    <div class="barraPrincipal">
        <h1 class="tituloBarra">FABRICA "OMNISTO"</h1>
    </div>
    <h1>MODIFICACIÓN DE DATOS</h1>
    <form action="update.php" method="POST">
    
        <div align="center">
            <label for="campo">Campo a Actualizar:</label>
            <select id="campo" name="campo">
                <option value="Nombre">Nombre</option>
                <option value="Apellido">Apellido</option>
                <option value="Direccion">Dirección</option>
                <option value="Salario">Salario</option>
            </select>

            <br><br>
            <label for="identificadorTrabajador">Codigo del Trabajador a Modificar:</label>
            <input type="text" placeholder="Ej: 20210001" name="identificadorTrabajador" id="identificadorTrabajador"/>

            <label for="nuevoDato">Nuevo Dato:</label>
            <input type="text" placeholder="Nuevo Dato" name="nuevoDato" id="nuevoDato"/>

            <br><br><br>
            <button>Modificar Dato</button>
        </div>

    </form>
    <div align="center">
        <br><br>
        <a href="index.php">Volver a Inicio</a>
    </div>
</body>
</html>