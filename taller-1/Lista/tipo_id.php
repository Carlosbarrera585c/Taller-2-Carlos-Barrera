<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new dataBaseClass('localhost', 'desercion', 'root', '');

    $sql = "SELECT cod_tipo_id, des_tipo_id, tipo_doc FROM tipo_id";

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

        <title>TIPO ID</title>
            <style type="text/css">

        body {
            background-color: #00BFFF;
        }
        body,td,th {
            color: #0B3B17;
        }

    </style></head>
    </head>

    <body><h2><CENTER>TABLA DE TIPO ID</CENTER></h2>
        <table border="5" align="center">
            <tr>
                <th>
                    CODIGO DEL TIPO ID
                </th>
                <th>
                    DESCRIPCION DEL TIPO ID
                </th>
                <th>
                    TIPO DE DOCUMENTO
                </th>
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <th>
                        <?php echo $row['cod_tipo_id'] ?>
                    </th>
                    <th>
                        <?php echo $row['des_tipo_id'] ?>
                    </th>
                    <th>
                        <?php echo $row['tipo_doc'] ?>
                    </th>
                </tr>

            <?php endforeach; ?>
        </table>

    </body>
</html>