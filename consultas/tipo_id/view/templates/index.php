<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Tipo Id</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Tabla de Tipo Id</h1>
        <table id="tblContenido">
            <thead>
                <tr>
                    <th>Codigo del Tipo Id</th>
                    <th>Descripcion del Tipo Id</th>
                    <th>Tipo de Documento</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['cod_tipo_id'] ?></td>
                        <td><?php echo $row['des_tipo_id'] ?></td>
                        <td><?php echo $row['tipo_doc'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>