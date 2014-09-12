<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Consulta 3</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Consulta 3</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Cantidad</th>
                    <th>Descripcion de Causa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['count(aprendiz.id_apre)'] ?></td>
                        <td><?php echo $row['des_causa'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>