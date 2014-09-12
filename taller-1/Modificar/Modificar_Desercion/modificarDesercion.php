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
    $num_doc = $_POST['num_doc'];
    try {
        $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
        $sql = "SELECT * from desercion where num_doc='$num_doc'";
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
            <form name="datos" method="post" action="modDesercion.php">
                <div align="center">
                    <table width="1204" border="1">
                        <tr>
                            <th width="144">Fecha </th>
                            <th width="144">Identificacion del Aprendiz</th>
                            <th width="144">Numero de la Ficha</th>
                            <th width="144">Codigo de la Causa</th>
                            <th width="144">Fecha de la Desercion</th>
                            <th width="144">Fase de la Desercion</th>

                        </tr>
                        <?php foreach ($arrData as $row): ?>
                            <input type="hidden" name="num_doc2" value="<?php echo $row['num_doc'] ?>">
                            <tr>
                                <td><input type="text" name="fecha2" value="<?php echo $row['fecha'] ?>"></td>
                                <td><input type="text" name="id_apre2" value="<?php echo $row['id_apre'] ?>"></td>
                                <td><input type="text" name="num_ficha2" value="<?php echo $row['num_ficha'] ?>"></td>
                                <td><input type="text" name="cod_causa2" value="<?php echo $row['cod_causa'] ?>"></td>
                                <td><input type="text" name="fecha_desercion2" value="<?php echo $row['fecha_desercion'] ?>"></td>
                                <td><input type="text" name="fase_desercion2" value="<?php echo $row['fase_desercion'] ?>"></td>
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