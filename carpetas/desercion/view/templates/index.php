<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Desercion</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Gestión de Desercion</h1>
        <div id="lnkNuevo">
            <a href="index.php?action=create"><button>Nueva Desercion</button></a>
        </div>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error ?></div>
        <?php endif ?>

        <?php if (isset($success)): ?>
            <div class="success"><?php echo $success ?></div>
        <?php endif ?>
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
                    <th>Acciones</th>
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
                        <td><a href="index.php?action=update&amp;num_doc=<?php echo $row['num_doc'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;num_doc=<?php echo $row['num_doc'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>