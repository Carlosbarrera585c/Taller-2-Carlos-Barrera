<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new dataBaseClass('localhost', 'desercion', 'root', '');

    $sql = "SELECT cod_depto, nom_depto FROM depto";

    $arrData = $objDB->getInstance()
            ->query($sql)
            ->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
?>


<!DOCTYPE html>
<html lang="es"><!--esto es para que el navegador lea la pagina y reconozca que es en espa�ol-->
    <head>

        <meta charset="UTF-8"><!--es para organizar o codificar los caracteres especiales de mi idioma en este caso espa�ol latinoamerica-->
        <meta name="description" content="practica de estilos"><!--es la descricion general o global de mi sitio web-->
        <meta name="keywords" content="html5, css3, javascript"><!--son las palabras claves que trabajo en mi sitio web-->

        <title>DEPARTAMENTO</title>
            <style type="text/css">

        body {
            background-color: #00BFFF;
        }
        body,td,th {
            color: #0B3B17;
        }

    </style></head>
    </head>

    <body><h2><CENTER>TABLA DE DEPARTAMENTO</CENTER></h2>
        <table border="5" align="center">
            <tr>
                <th>
                    CODIGO DE DEPARTAMENTO
                </th>
                <th>
                    NOMBRE DE DEPARTAMENTO
                </th>
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <th>
                        <?php echo $row['cod_depto'] ?>
                    </th>
                    <th>
                        <?php echo $row['nom_depto'] ?>
                    </th>

                </tr>

            <?php endforeach; ?>
        </table>

    </body>
</html>