<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title> Consulta 6</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Consulta 6</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Nombre de Aprendiz</th>
                    <th>Genero</th>
                    <th>Descripcion Rh</th>
                    <th>Nombre de la Ciudad</th>
                    <th>Descripcion del Programa</th>
                    <th>Descripcion de la Causa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['nom_apre'] ?></td>
                        <td><?php echo $row['genero'] ?></td>
                        <td><?php echo $row['des_rh'] ?></td>
                        <td><?php echo $row['nom_ciudad'] ?></td>
                        <td><?php echo $row['des_prog'] ?></td>
                        <td><?php echo $row['des_causa'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>