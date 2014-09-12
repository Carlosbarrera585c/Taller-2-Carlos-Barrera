<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Desercion</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Tabla de Desercion</h1>
                <table id="tblContenido">
            <thead>
                <tr>
                    <th>Numero de Documento</th>
                    <th>Fecha</th>
                    <th>Identificacion del Aprendiz</th>
                    <th>Numero de ficha</th>
                    <th>Codigo de Causa</th>
                    <th>Fecha de Desercion</th>
                    <th>Fase de Desercion</th>
                                    </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['num_doc'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                        <td><?php echo $row['id_apre'] ?></td>
                        <td><?php echo $row['num_ficha'] ?></td>
                        <td><?php echo $row['cod_causa'] ?></td>
                        <td><?php echo $row['fecha_desercion'] ?></td>
                        <td><?php echo $row['fase_desercion'] ?></td>
                                           </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>