<?php
require_once 'DataBaseClass.php';

$objDB = new dataBaseClass('localhost', 'desercion', 'root', '');

$sql = "SELECT nom_apre, des_tipo_id, nom_ciudad, nom_depto, desc_centro
FROM aprendiz, desercion, ciudad, tipo_id, depto, centro, ficha, causa_desercion
WHERE desercion.cod_causa=causa_desercion.cod_causa
and desercion.id_apre=aprendiz.id_apre
and desercion.num_ficha=ficha.num_ficha
and aprendiz.cod_tipo_id=tipo_id.cod_tipo_id
and aprendiz.cod_ciudad=ciudad.cod_ciudad
and ciudad.cod_depto=depto.cod_depto
and ficha.cod_centro=centro.cod_centro";

$arrData = $objDB->getInstance()->query($sql)->fetchAll();
?>
<!DOCTYPE html>
<html lang="es"><!--esto es para que el navegador lea la pagina y reconozca que es en español-->
    <head>

        <meta charset="UTF-8"><!--es para organizar o codificar los caracteres especiales de mi idioma en este caso español latinoamerica-->
        <meta name="description" content="practica de estilos"><!--es la descricion general o global de mi sitio web-->
        <meta name="keywords" content="html5, css3, javascript"><!--son las palabras claves que trabajo en mi sitio web-->

        <title>CONSULTA</title>
        <style type="text/css">

            body {
                background-color: #00BFFF;
            }
            body,td,th {
                color: #0B3B17;
            }

        </style></head>
</head>

<body><h2><CENTER>CONSULTA 2</CENTER></h2>
    <table border="5" align="center">
        <tr>
            <th>
                NOMBRE DEL APRENDIZ
            </th>
            <th>
                DESCRIPCION TIPO ID
            </th>
            <th>
                NOMBRE DE CIUDAD
            </th>
            <th>
                NOMMBRE DEPARTAMENTO
            </th>
            <th>
                DESCRIPCION DEL CENTRO
            </th>

        </tr>
        <?php foreach ($arrData as $row): ?>
            <tr>
                <th>
                    <?php echo $row['nom_apre'] ?>
                </th>
                <th>
                    <?php echo $row['des_tipo_id'] ?>
                </th>
                <th>
                    <?php echo $row['nom_ciudad'] ?>
                </th>
                <th>
                    <?php echo $row['nom_depto'] ?>
                </th>
                <th>
                    <?php echo $row['desc_centro'] ?>
                </th>
            </tr>

        <?php endforeach; ?>
    </table>

</body>
</html>