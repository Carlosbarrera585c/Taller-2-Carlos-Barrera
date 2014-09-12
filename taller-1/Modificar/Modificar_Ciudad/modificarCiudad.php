<html>
    <head>
        <title>Insertar Registros</title>
        <style type="text/css">
            <!--
            body {
                background-color: #00BFFF;
            }
            body,td,th {
                color: #0B3B17;
            }
            -->
        </style></head>
    <?php
    require_once ('DataBaseClass.php');
    $cod_ciudad = $_POST['cod_ciudad'];
    try {
        $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
        $sql = "SELECT * from ciudad where cod_ciudad='$cod_ciudad'";
        $arrData = $objDB->getInstance()
                ->query($sql)
                ->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOExcepcion $ex) {
        echo $exc->getmessage();
    }
    ?>
    <html>
        <head>
            <title>Campos a Modificar</title>
        </head>
        <body>
            <form name="datos" method="post" action="modCiudad.php">
                <div align="center">
                    <table width="1204" border="1">
                        <tr>
                            <th width="144">Descripcion del Ciudad </th>
                            <th width="144">Codigo del Departamento </th>
                            <th width="144">Cantidad de Habitantes </th>

                        </tr>
                        <?php foreach ($arrData as $row): ?>
                            <input type="hidden" name="cod_ciudad2" value="<?php echo $row['cod_ciudad'] ?>">
                            <tr>
                                <td><input type="text" name="nom_ciudad2" value="<?php echo $row['nom_ciudad'] ?>"></td>
                                <td><input type="text" name="cod_depto2" value="<?php echo $row['cod_depto'] ?>"></td>
                                <td><input type="text" name="habitantes2" value="<?php echo $row['habitantes'] ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="8"><div align="center"><input name="submit" type="submit" value="Modificar"></div></td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                    <p>&nbsp;</p>

                </div>
            </form>
        </body>
    </html>