<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Ciudad</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Tabla de Ciudad</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Codigo de la Ciudad</th>
                    <th>Nombre de la Ciudad</th>
                    <th>Codigo del Departamento</th>
                    <th>Habitantes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['cod_ciudad'] ?></td>
                        <td><?php echo $row['nom_ciudad'] ?></td>
                        <td><?php echo $row['cod_depto'] ?></td>
                        <td><?php echo $row['habitantes'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>