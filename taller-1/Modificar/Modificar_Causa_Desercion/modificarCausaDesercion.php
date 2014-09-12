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
    $cod_causa = $_POST['cod_causa'];
    try {
        $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
        $sql = "SELECT * from causa_desercion where cod_causa='$cod_causa'";
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
            <form name="datos" method="post" action="modCausa.php">
                <div align="center">
                    <table width="1204" border="1">
                        <tr>
                            <th width="144">Descripcion de La Causa </th>
                            <th width="144">Estado de la Causa </th>

                        </tr>
                        <?php foreach ($arrData as $row): ?>
                            <input type="hidden" name="cod_causa2" value="<?php echo $row['cod_causa'] ?>">
                            <tr>
                                <td><input type="text" name="des_causa2" value="<?php echo $row['des_causa'] ?>"></td>
                                <td><input type="text" name="estado_causa2" value="<?php echo $row['estado_causa'] ?>"></td>
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