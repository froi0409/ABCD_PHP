<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eliminar Trabajador</title>
</head>
<body>
    <h1>Eliminar Trabajador</h1>
    <form action="delete.php" method="POST">
    <label for="identificadorTrabajador">Ingrese el código del trabajador a eliminar:</label>
        <input type="text" placeholder="ej: 202100001" id="identificadorTrabajador" name="identificadorTrabajador"/>
        <br>
        <input type="submit" value="Eliminar Trabajador"/>
    </form>
</body>
</html>