<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Ciudad</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Gestión de Ciudad</h1>
        <div id="lnkNuevo">
            <a href="index.php?action=create"><button>Nueva Ciudad</button></a>
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
                    <th>Codigo de la Ciudad</th>
                    <th>Nombre de la Ciudad</th>
                    <th>Codigo del Departamento</th>
                    <th>Habitantes</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['cod_ciudad'] ?></td>
                        <td><?php echo $row['nom_ciudad'] ?></td>
                        <td><?php echo $row['cod_depto'] ?></td>
                        <td><?php echo $row['habitantes'] ?></td>
                        <td><a href="index.php?action=update&amp;cod_ciudad=<?php echo $row['cod_ciudad'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;cod_ciudad=<?php echo $row['cod_ciudad'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>