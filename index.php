<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/base.css" rel="stylesheet" type="text/css">
        <title>Fabrica "Omnisto"</title>
    </head>
    
    <body>

        <div class="barraPrincipal">
            <h1 class="tituloBarra">FABRICA "OMNISTO"</h1>
        </div>


        <h1>Seleccione la opción que desea ejecutar:</h1>
        
        <div align="center">
            <form action="ui-insert.php" method="POST">
                <button>Nuevo Trabajador</button>
            </form>
            <br>

            <form action="ui-delete.php" method="POST">
                <button>Eliminar Trabajador</button>
            </form>
            <br>

            <form action="ui-update.php" method="POST">
                <button>Modificar Trabajador</button>
            </form>
            <br>

            <form action="ui-listado.php" method="POST">
                <button>Listar Trabajadores</button>
            </form>
        </div>
    
    </body>
</html>