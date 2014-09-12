<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Centro</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Gestión de Centro</h1>
        <div id="lnkNuevo">
            <a href="index.php?action=create"><button>Nuevo Centro</button></a>
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
                    <th>Descripcion de Centro</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Codigo de la Ciudad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['cod_centro'] ?></td>
                        <td><?php echo $row['desc_centro'] ?></td>
                        <td><?php echo $row['tel'] ?></td>
                        <td><?php echo $row['dir'] ?></td>
                        <td><?php echo $row['cod_ciudad'] ?></td>
                        <td><a href="index.php?action=update&amp;cod_centro=<?php echo $row['cod_centro'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;cod_centro=<?php echo $row['cod_centro'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>