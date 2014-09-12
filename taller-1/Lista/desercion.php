<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new dataBaseClass('localhost', 'desercion', 'root', '');

    $sql = "SELECT num_doc, fecha, id_apre, num_ficha, cod_causa, fecha_desercion, fase_desercion FROM desercion";

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

        <title>DESERCION</title>
            <style type="text/css">

        body {
            background-color: #00BFFF;
        }
        body,td,th {
            color: #0B3B17;
        }

    </style></head>
    </head>

    <body><h2><CENTER>TABLA DE DESERCION</CENTER></h2>
        <table border="5" align="center">
            <tr>
                <th>
                    NUMERO DE DOCUMENTO
                </th>
                <th>
                    FECHA
                </th>
                <th>
                    IDENTIFICACION DE APRENDIZ
                </th>
                <th>
                    NUMERO DE FICHA
                </th>
                <th>
                    CODIGO DE CAUSA
                </th>
                <th>
                    FECHA DE DESERCION
                </th>
                <th>
                    FASE DE DESERCION
                </th>
                
            </tr>
            <?php foreach ($arrData as $row): ?>
                <tr>
                    <th>
                        <?php echo $row['num_doc'] ?>
                    </th>
                    <th>
                        <?php echo $row['fecha'] ?>
                    </th>
                    <th>
                        <?php echo $row['id_apre'] ?>
                    </th>
                    <th>
                        <?php echo $row['num_ficha'] ?>
                    </th>
                    <th>
                        <?php echo $row['cod_causa'] ?>
                    </th>

                    <th>
                        <?php echo $row['fecha_desercion'] ?>
                    </th>
                    <th>
                        <?php echo $row['fase_desercion'] ?>
                    </th>
                </tr>

            <?php endforeach; ?>
        </table>

    </body>
</html>