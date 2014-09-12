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
    $cod_depto = $_POST['cod_depto'];
    try {
        $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
        $sql = "SELECT * from depto where cod_depto='$cod_depto'";
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
            <form name="datos" method="post" action="modDepto.php">
                <div align="center">
                    <table  width="120" border="1">
                        <tr>
                            <th width="144">Nombre del Departamento </th>
                        </tr>
                        <?php foreach ($arrData as $row): ?>
                            <input type="hidden" name="cod_depto2" value="<?php echo $row['cod_depto'] ?>">
                            <tr>
                                <td><input type="text" name="nom_depto2" value="<?php echo $row['nom_depto'] ?>"></td>
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