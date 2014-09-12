<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Matricula</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Gestión de Matricula</h1>
        <div id="lnkNuevo">
            <a href="index.php?action=create"><button>Nueva Matricula</button></a>
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
                    <th>Numero de Ficha</th>
                    <th>Identificacion del Aprendiz</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['num_ficha'] ?></td>
                        <td><?php echo $row['id_apre'] ?></td>
                        <td><?php echo $row['estado'] ?></td>
                        <td><a href="index.php?action=update&amp;num_ficha=<?php echo $row['num_ficha'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;num_ficha=<?php echo $row['num_ficha'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>