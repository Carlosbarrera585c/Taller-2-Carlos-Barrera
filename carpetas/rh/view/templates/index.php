<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Rh</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Gestión de Rh</h1>
        <div id="lnkNuevo">
            <a href="index.php?action=create"><button>Nuevo Rh</button></a>
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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['cod_rh'] ?></td>
                        <td><?php echo $row['des_rh'] ?></td>
                        <td><a href="index.php?action=update&amp;cod_rh=<?php echo $row['cod_rh'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;cod_rh=<?php echo $row['cod_rh'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>