<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Datos</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Tabla de Datos</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Id Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Id de Localidad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['usuario_id'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['apellido'] ?></td>
                        <td><?php echo $row['direccion'] ?></td>
                        <td><?php echo $row['telefono'] ?></td>
                        <td><?php echo $row['localidad_id'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>