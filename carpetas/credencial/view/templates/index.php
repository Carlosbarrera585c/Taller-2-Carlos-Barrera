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
            <a href="index.php?action=create"><button>Nuevo Credencial</button></a>
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
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['id_credencial'] ?></td>
                        <td><?php echo $row['nombre_credencial'] ?></td>
                        <td><a href="index.php?action=update&amp;id_credencial=<?php echo $row['id_credencial'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id_credencial=<?php echo $row['id_credencial'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>