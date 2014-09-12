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
    $cod_pro = $_POST['cod_pro'];
    try {
        $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
        $sql = "SELECT * from programa where cod_pro='$cod_pro'";
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
            <form name="datos" method="post" action="modPrograma.php">
                <div align="center">
                    <table width="1204" border="1">
                        <tr>
                            <th width="144">Descripcion del Programa</th>
                            <th width="144">Estado </th>

                        </tr>
                        <?php foreach ($arrData as $row): ?>
                            <input type="hidden" name="cod_pro2" value="<?php echo $row['cod_pro'] ?>">
                            <tr>
                                <td><input type="text" name="des_pro2" value="<?php echo $row['des_prog'] ?>"></td>
                                <td><input type="text" name="estado2" value="<?php echo $row['estado'] ?>"></td>
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