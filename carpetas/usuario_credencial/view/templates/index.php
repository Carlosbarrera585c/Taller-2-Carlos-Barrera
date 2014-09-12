<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Credencial</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Gestión de Credencial</h1>
        <div id="lnkNuevo">
            <a href="index.php?action=create"><button>Nueva Credencial</button></a>
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
                    <th>Identificacion</th>
                    <th>Identificacion de Usuario</th>
                    <th>Identificacion de Credencial</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['usuario_id'] ?></td>
                        <td><?php echo $row['credencial_id'] ?></td>
                        <td><a href="index.php?action=update&amp;id=<?php echo $row['id'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id=<?php echo $row['id'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>