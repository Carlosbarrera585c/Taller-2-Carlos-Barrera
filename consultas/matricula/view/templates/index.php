<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Matricula</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Tabla de Matricula</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Numero de Ficha</th>
                    <th>Identificacion del Aprendiz</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['num_ficha'] ?></td>
                        <td><?php echo $row['id_apre'] ?></td>
                        <td><?php echo $row['estado'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>