<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar</title>
    </head>
    <body>
        <form action="<?php echo $formAction ?>" method="post">
            <input type="hidden" id="confirmation" name="confirmation" value="true">
            ¿Realmente Desea Borrar el Registro <?php echo $_GET['cod_ciudad'] ?>?
            <input type="submit" value="aceptar"> <a href="index.php" >Cancelar</a>
        </form>
    </body>
</html>
