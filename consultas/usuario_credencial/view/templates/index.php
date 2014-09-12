<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Credencial</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Tabla de Credencial</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Identificacion</th>
                    <th>Identificacion de Usuario</th>
                    <th>Identificacion de Credencial</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['usuario_id'] ?></td>
                        <td><?php echo $row['credencial_id'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>