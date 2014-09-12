<?php
require_once 'DataBaseClass.php';

$objDB = new dataBaseClass('localhost', 'desercion', 'root', '');

$sql = "SELECT nom_apre, genero, des_rh, nom_ciudad, des_prog, des_causa
from desercion, aprendiz, rh, ciudad, ficha, programa, causa_desercion
where desercion.id_apre=aprendiz.id_apre
and aprendiz.cod_rh=rh.cod_rh
and aprendiz.cod_ciudad=ciudad.cod_ciudad
and desercion.num_ficha=ficha.num_ficha
and ficha.cod_programa=programa.cod_pro
and desercion.cod_causa=causa_desercion.cod_causa
and aprendiz.genero='m' and causa_desercion.cod_causa='3'";

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

<body><h2><CENTER>CONSULTA 6</CENTER></h2>
    <table border="5" align="center">
        <tr>
            <th>
                NOMBRE APRENDIZ
            </th>
            <th>
                GENERO
            </th>
            <th>
                DESCRIPCION RH
            </th>
            <th>
                NOMBRE DE LA CIUDAD
            </th>
            <th>
                DESCRIPCION DEL PROGRAMA
            </th>
            <th>
                DESCRIPCION DE LA CAUSA
            </th>
            
        </tr>
        <?php foreach ($arrData as $row): ?>
            <tr>
                <th>
                    <?php echo $row['nom_apre'] ?>
                </th>
                <th>
                    <?php echo $row['genero'] ?>
                </th>
                <th>
                    <?php echo $row['des_rh'] ?>
                </th>
                <th>
                    <?php echo $row['nom_ciudad'] ?>
                </th>
                <th>
                    <?php echo $row['des_prog'] ?>
                </th>
                <th>
                    <?php echo $row['des_causa'] ?>
                </th>

            </tr>

        <?php endforeach; ?>
    </table>

</body>
</html>