<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Crear</title>
        <link rel="stylesheet" href="css/formulario.css"
    </head>
    <body>
        <h1>Nuevo Rh</h1>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error ?></div>
        <?php endif ?>

        <?php if (isset($success)): ?>
            <div class="success"><?php echo $success ?></div>
        <?php endif ?>
        <?php include '_formulario.php'; ?>
    </body>
</html>
