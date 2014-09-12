<?php

require_once 'DataBaseClass.php';

$objDB= new dataBaseClass('localhost', 'desercion', 'root', '');

$sql = "SELECT count(aprendiz.id_apre), des_causa
FROM aprendiz, desercion, causa_desercion, ficha, centro
WHERE desercion.id_apre=aprendiz.id_apre
and desercion.cod_causa=causa_desercion.cod_causa
and desercion.num_ficha=ficha.num_ficha
and ficha.cod_centro=centro.cod_centro group by des_causa";

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

<body><h2><CENTER>CONSULTA 8</CENTER></h2>
    <table border="5" align="center">
        <tr>
            <th>
                CANTIDAD
            </th>
            <th>
               DESCRIPCION CAUSA
            </th>

        </tr>
<?php foreach ($arrData as $row): ?>
            <tr>
                <th>
    <?php echo $row['count(aprendiz.id_apre)'] ?>
                </th>
                <th>
    <?php echo $row['des_causa'] ?>
                </th>
            </tr>

<?php endforeach; ?>
    </table>

</body>
</html>