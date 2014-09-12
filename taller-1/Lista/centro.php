<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new dataBaseClass('localhost', 'desercion', 'root', '');

    $sql = "SELECT cod_centro, desc_centro, tel, dir, cod_ciudad FROM centro";

    $arrData = $objDB->getInstance()
            ->query($sql)
            ->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
?>


<!DOCTYPE html>
<html lang="es"><!--esto es para que el navegador lea la pagina y reconozca que es en español-->
    <head>

        <meta charset="UTF-8"><!--es para organizar o codificar los caracteres especiales de mi idioma en este caso español latinoamerica-->
        <meta name="description" content="practica de estilos"><!--es la descricion general o global de mi sitio web-->
        <meta name="keywords" content="html5, css3, javascript"><!--son las palabras claves que trabajo en mi sitio web-->

        <title>CENTRO</title>
            <style type="text/css">

        body {
            background-color: #00BFFF;
        }
        body,td,th {
            color: #0B3B17;
        }

    </style></head>
    </head>

    <body><h2><CENTER>TABLA DE CENTRO</CENTER></h2>
        <table border="5" align="center">
            <tr>
                <th>
                    CODIGO DE APRENDIZ
                </th>
                <th>
                    DESCRIPCION DEL CENTRO
                </th>
                <th>
                    TELEFONO
                </th>
                <th>
                    DIRECCION
                </th>
                <th>
                    CIUDAD
                </th>
                
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <th>
                        <?php echo $row['cod_centro'] ?>
                    </th>
                    <th>
                        <?php echo $row['desc_centro'] ?>
                    </th>
                    <th>
                        <?php echo $row['tel'] ?>
                    </th>
                    <th>
                        <?php echo $row['dir'] ?>
                    </th>
                    <th>
                        <?php echo $row['cod_ciudad'] ?>
                    </th>
                </tr>

            <?php endforeach; ?>
        </table>

    </body>
</html>
