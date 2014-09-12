<?php
require_once 'DataBaseClass.php';
try {

    $objDB = new dataBaseClass('localhost', 'desercion', 'root', '');

    $sql = "SELECT id_apre, nom_apre, apel_aprn, cod_ciudad, cod_tipo_id, cod_rh, genero, edad, telefono_apre FROM APRENDIZ";

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
        <title>APRENDIZ</title>
        <style type="text/css">

            body {
                background-color: #00BFFF;
            }
            body,td,th {
                color: #0B3B17;
            }

        </style></head>
</head>

<body><h2><CENTER>TABLA APRENDIZ</CENTER></h2>
    <table border="5" align="center">
        <tr>
            <th>
                ID APRENDIZ
            </th>
            <th>
                NOMBRE APRENDIZ
            </th>
            <th>
                APELLIDO APRENDIZ
            </th>
            <th>
                CODIGO CIUDAD
            </th>
            <th>
                CODIGO TIPO ID
            </th>
            <th>
                CODIGO RH
            </th>
            <th>
                GENERO
            </th>
            <th>
                EDAD
            </th>
            <th>
                TELEFONO
            </th>
        </tr>
        <?php foreach ($arrData as $row): ?>
            <tr>
                <th>
                    <?php echo $row['id_apre'] ?>
                </th>
                <th>
                    <?php echo $row['nom_apre'] ?>
                </th>
                <th>
                    <?php echo $row['apel_aprn'] ?>
                </th>
                <th>
                    <?php echo $row['cod_ciudad'] ?>
                </th>
                <th>
                    <?php echo $row['cod_tipo_id'] ?>
                </th>

                <th>
                    <?php echo $row['cod_rh'] ?>
                </th>
                <th>
                    <?php echo $row['genero'] ?>
                </th>
                <th>
                    <?php echo $row['edad'] ?>
                </th>
                <th>
                    <?php echo $row['telefono_apre'] ?>
                </th>
            </tr>

        <?php endforeach; ?>
    </table>

</body>
</html>