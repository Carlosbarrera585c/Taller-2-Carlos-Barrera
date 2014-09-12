<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Tipo Id</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Gestión de Tipo Id</h1>
        <div id="lnkNuevo">
            <a href="index.php?action=create"><button>Nuevo Tipo Id</button></a>
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
                    <th>Codigo del Tipo Id</th>
                    <th>Descripcion del Tipo Id</th>
                    <th>Tipo de Documento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['cod_tipo_id'] ?></td>
                        <td><?php echo $row['des_tipo_id'] ?></td>
                        <td><?php echo $row['tipo_doc'] ?></td>
                        <td><a href="index.php?action=update&amp;cod_tipo_id=<?php echo $row['cod_tipo_id'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;cod_tipo_id=<?php echo $row['cod_tipo_id'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>