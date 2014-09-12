<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Aprendiz</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
        <a align="right" href="../../../../Taller-2/"><button>Regresar</button></a>
    <center>
        <h1>Gestión de Aprendiz</h1>
        <div id="lnkNuevo">
            <a href="index.php?action=create"><button>Nuevo Aprendiz</button></a>
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
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Codigo Ciudad</th>
                    <th>Codigo Tipo Id</th>
                    <th>Codigo Rh</th>
                    <th>Genero</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>
                        <td><?php echo $row['id_apre'] ?></td>
                        <td><?php echo $row['nom_apre'] ?></td>
                        <td><?php echo $row['apel_aprn'] ?></td>
                        <td><?php echo $row['cod_ciudad'] ?></td>
                        <td><?php echo $row['cod_tipo_id'] ?></td>
                        <td><?php echo $row['cod_rh'] ?></td>
                        <td><?php echo $row['genero'] ?></td>
                        <td><?php echo $row['edad'] ?></td>
                        <td><?php echo $row['telefono_apre'] ?></td>
                        <td><a href="index.php?action=update&amp;id_apre=<?php echo $row['id_apre'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id_apre=<?php echo $row['id_apre'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</center>
</html>