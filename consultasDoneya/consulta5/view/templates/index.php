<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Consulta 5</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Consulta 5</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Nombre Aprendiz</th>
                    <th>Descripcion Tipo Id</th>
                    <th>Descripcion Centro</th>
                    <th>Descripcion Causa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['nom_apre'] ?></td>
                        <td><?php echo $row['des_tipo_id'] ?></td>
                        <td><?php echo $row['desc_centro'] ?></td>
                        <td><?php echo $row['des_causa'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>