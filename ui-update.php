<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modificar Información</title>
</head>
<body>
    <h1>MODIFICACIÓN DE DATOS</h1>
    <form action="update.php" method="POST">
    
        <label for="campo">Campo a Actualizar:</label>
        <select id="campo" name="campo">
            <option value="Nombre">Nombre</option>
            <option value="Apellido">Apellido</option>
            <option value="Direccion">Dirección</option>
            <option value="Salario">Salario</option>
        </select>

        <br>
        <label for="identificadorTrabajador">Codigo del Trabajador a Modificar:</label>
        <input type="text" placeholder="Ej: 20210001" name="identificadorTrabajador" id="identificadorTrabajador"/>

        <label for="nuevoDato">Nuevo Dato:</label>
        <input type="text" placeholder="Nuevo Dato" name="nuevoDato" id="nuevoDato"/>

        <br>
        <input type="submit" value="Modificar Dato"/>


    </form>
</body>
</html>