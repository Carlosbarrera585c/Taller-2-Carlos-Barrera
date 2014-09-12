<?php
require_once 'DataBaseClass.php';

$objDB = new dataBaseClass('localhost', 'desercion', 'root', '');

$sql = "SELECT count(aprendiz.id_apre), fase_desercion
FROM aprendiz, desercion
WHERE desercion.id_apre=aprendiz.id_apre group by fase_desercion";

$arrData = $objDB->getInstance()->query($sql)->fetchAll();

?>


<!DOCTYPE html>
<html lang="es"><!--esto es para que el navegador lea la pagina y reconozca que es en espa�ol-->
    <head>

        <meta charset="UTF-8"><!--es para organizar o codificar los caracteres especiales de mi idioma en este caso espa�ol latinoamerica-->
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

<body><h2><CENTER>CONSULTA 1</CENTER></h2>
    <table border="5" align="center">
        <tr>
            <th>
                CANTIDAD
            </th>
            <th>
                FASE DESERCION
            </th>

        </tr>
<?php foreach ($arrData as $row): ?>
            <tr>
                <th>
    <?php echo $row['count(aprendiz.id_apre)'] ?>
                </th>
                <th>
    <?php echo $row['fase_desercion'] ?>
                </th>
            </tr>

<?php endforeach; ?>
    </table>

</body>
</html>