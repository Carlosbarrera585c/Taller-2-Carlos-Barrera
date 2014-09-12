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
        <title>Campos a Eliminar</title>
    </head>
    <body>
        <form name="datos" method="post" action="delCentro.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Descripcion Centro </th>
                        <th>Telefono Centro</th>
                        <th>Direccion Centro</th>
                        <th>Codigo Ciudad</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_centro" value="<?php echo $row['cod_centro'] ?>">
                        <tr>
                            <td><?php echo $row['desc_centro'] ?></td>
                            <td><?php echo $row['tel'] ?></td>
                            <td><?php echo $row['dir'] ?></td>
                            <td><?php echo $row['cod_ciudad'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="8"><div align="center"><input name="submit" type="submit" value="Eliminar"></div></td>
                        </tr>
                    <?php endforeach ?>
                </table>
                <p>&nbsp;</p>

            </div>
        </form>
    </body>
</html>