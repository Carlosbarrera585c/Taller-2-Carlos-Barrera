<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Consulta 2</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Consulta 2</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Nombre del Aprendiz</th>
                    <th>Descripcion de Tipo Id</th>
                    <th>Nombre de la Ciudad</th>
                    <th>Nombre del Departamento</th>
                    <th>Descripcion del Centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td> <?php echo $row['nom_apre'] ?></td>
                        <td> <?php echo $row['des_tipo_id'] ?></td>
                        <td><?php echo $row['nom_ciudad'] ?></td>
                        <td><?php echo $row['nom_depto'] ?></td>
                        <td><?php echo $row['desc_centro'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>