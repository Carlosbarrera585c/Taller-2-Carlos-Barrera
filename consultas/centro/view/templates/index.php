<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Centro</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Tabla de Centro</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion de Centro</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Codigo de la Ciudad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['cod_centro'] ?></td>
                        <td><?php echo $row['desc_centro'] ?></td>
                        <td><?php echo $row['tel'] ?></td>
                        <td><?php echo $row['dir'] ?></td>
                        <td><?php echo $row['cod_ciudad'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>