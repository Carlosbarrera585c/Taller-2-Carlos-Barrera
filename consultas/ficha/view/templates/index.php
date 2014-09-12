<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Ficha</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Tabla de Ficha</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Numero de Ficha</th>
                    <th>Codigo del Programa</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Finalizacion</th>
                    <th>Codigo del Centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['num_ficha'] ?></td>
                        <td><?php echo $row['cod_programa'] ?></td>
                        <td><?php echo $row['fecha_ini'] ?></td>
                        <td><?php echo $row['fecha_fin'] ?></td>
                        <td><?php echo $row['cod_centro'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>