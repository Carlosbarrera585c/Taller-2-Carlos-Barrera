<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ELIMINAR APRENDIZ</title>
    </head>
    <body>
        <form action="<?php echo $formAction ?>" method="post">
            <input type="hidden" id="confirmation" name="confirmation" value="true">
            ¿Realmente desea borrar el registro <?php echo $_GET['id_apre'] ?>?
            <input type="submit" value="aceptar"> <a href="index.php">Cancelar</a>
        </form>
    </body>
</html>
