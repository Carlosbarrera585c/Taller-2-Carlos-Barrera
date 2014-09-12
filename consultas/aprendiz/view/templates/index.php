<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Aprendiz</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Tabla de Aprendiz</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Identificacion</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Codigo Ciudad</th>
                    <th>Codigo Tipo Id</th>
                    <th>Codigo Rh</th>
                    <th>Genero</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['id_apre'] ?></td>
                        <td><?php echo $row['nom_apre'] ?></td>
                        <td><?php echo $row['apel_aprn'] ?></td>
                        <td><?php echo $row['cod_ciudad'] ?></td>
                        <td><?php echo $row['cod_tipo_id'] ?></td>
                        <td><?php echo $row['cod_rh'] ?></td>
                        <td><?php echo $row['genero'] ?></td>
                        <td><?php echo $row['edad'] ?></td>
                        <td><?php echo $row['telefono_apre'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>