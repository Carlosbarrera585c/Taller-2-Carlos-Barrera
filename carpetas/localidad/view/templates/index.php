<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Localidad</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Gestión de Localidad</h1>
        <div id="lnkNuevo">
            <a href="index.php?action=create"><button>Nueva Localidad</button></a>
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
                    <th>Codigo de Localidad</th>
                    <th>Nombre</th>
                    <th>Localidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['localidad'] ?></td>
                        <td><a href="index.php?action=update&amp;id=<?php echo $row['id'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id=<?php echo $row['id'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>