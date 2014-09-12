<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Causa</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Gestión de Causa</h1>
        <div id="lnkNuevo">
            <a href="index.php?action=create"><button>Nueva Causa</button></a>
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
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['cod_causa'] ?></td>
                        <td><?php echo $row['des_causa'] ?></td>
                        <td><?php echo $row['estado_causa'] ?></td>
                        <td><a href="index.php?action=update&amp;cod_causa=<?php echo $row['cod_causa'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;cod_causa=<?php echo $row['cod_causa'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>