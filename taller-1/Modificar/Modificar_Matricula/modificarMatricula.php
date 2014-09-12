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
    $num_ficha = $_POST['num_ficha'];
    try {
        $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
        $sql = "SELECT * from matricula where num_ficha='$num_ficha'";
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
            <form name="datos" method="post" action="modMatricula.php">
                <div align="center">
                    <table width="1204" border="1">
                        <tr>
                            <th width="144">Identificacion dl Aprendiz </th>
                            <th width="144">Estado </th>

                        </tr>
                        <?php foreach ($arrData as $row): ?>
                            <input type="hidden" name="num_ficha2" value="<?php echo $row['num_ficha'] ?>">
                            <tr>
                                <td><input type="text" name="id_apre2" value="<?php echo $row['id_apre'] ?>"></td>
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