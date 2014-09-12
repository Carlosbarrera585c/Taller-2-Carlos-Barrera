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
    $cod_centro = $_POST['cod_centro'];
    try {
        $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
        $sql = "SELECT * from centro where cod_centro='$cod_centro'";
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
            <form name="datos" method="post" action="modCentro.php">
                <div align="center">
                    <table width="1204" border="1">
                        <tr>
                            <th width="144">Descripcion del Centro </th>
                            <th width="144">Telefono </th>
                            <th width="144">Direccion </th>
                            <th width="144">Codigo de la Ciudad </th>
                        </tr>
                        <?php foreach ($arrData as $row): ?>
                            <input type="hidden" name="cod_centro2" value="<?php echo $row['cod_centro'] ?>">
                            <tr>
                                <td><input type="text" name="desc_centro2" value="<?php echo $row['desc_centro'] ?>"></td>
                                <td><input type="text" name="tel2" value="<?php echo $row['tel'] ?>"></td>
                                <td><input type="text" name="dir2" value="<?php echo $row['dir'] ?>"></td>
                                <td><input type="text" name="cod_ciudad2" value="<?php echo $row['cod_ciudad'] ?>"></td>
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