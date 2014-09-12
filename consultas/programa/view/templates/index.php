<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Programa</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Tabla de Programa</h1>

        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Codigo del Programa</th>
                    <th>Descripcion del Programa</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['cod_pro'] ?></td>
                        <td><?php echo $row['des_prog'] ?></td>
                        <td><?php echo $row['estado'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>