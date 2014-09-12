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
    $cod_tipo_id = $_POST['cod_tipo_id'];
    try {
        $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
        $sql = "SELECT * from tipo_id where cod_tipo_id='$cod_tipo_id'";
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
            <form name="datos" method="post" action="modTipo_Id.php">
                <div align="center">
                    <table width="1204" border="1">
                        <tr>
                            <th width="144">Descripcion del Tipo de Identificacion </th>
                            <th width="144">Tipo de Documento: </th>

                        </tr>
                        <?php foreach ($arrData as $row): ?>
                            <input type="hidden" name="cod_tipo_id2" value="<?php echo $row['cod_tipo_id'] ?>">
                            <tr>
                                <td><input type="text" name="des_tipo_id2" value="<?php echo $row['des_tipo_id'] ?>"></td>
                                <td><input type="text" name="tipo_doc2" value="<?php echo $row['tipo_doc'] ?>"></td>
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