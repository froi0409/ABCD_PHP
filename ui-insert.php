<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insertar Nuevo Trabajador</title>
</head>
<body>
    <h1>NUEVOS TRABAJADORES</h1>
    <h3>Ingrese los datos de los Trabajadores</h3>
    
    <form action="insert.php" method="POST">
        
        <label for="identificadorTrabajador">Identificacion:</label>
        <input type="text" placeholder="ej: 202100001" id="identificadorTrabajador" name="identificadorTrabajador"/>
    
        <label for="nombreTrabajador">Nombre: </label>
        <input type="text" placeholder="Nombre del Trabajador" id="nombreTrabajador" name="nombreTrabajador"/>

        <label for="apellidoTrabajador">Apellido: </label>
        <input type="text" placeholder="Apellido del Trabajador" id="apellidoTrabajador" name="apellidoTrabajador"/>

        <label for="direccionTrabajador">Dirección: </label>
        <input type="text" placeholder="Dirección del Trabajador" id="direccionTrabajador" name="direccionTrabajador"/>

        <label for="generoTrabajador">Genero: </label>
        <select id="generoTrabajador" name="generoTrabajador">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>

        <label for="salarioTrabajador">Salario:</label>
        <input type="text" placeholder="ej: 5000.00" id="salarioTrabajador" name="salarioTrabajador"/>

        <br>
        <input type="submit" value="Ingresar Trabajador"/>
    </form>


    <a href="index.php">Volver a Inicio</a>

</body>
</html>