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
$cod_rh = $_POST['cod_rh'];
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $sql = "SELECT * from rh where cod_rh='$cod_rh'";
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
        <form name="datos" method="post" action="delRh.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Descripcion RH</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_rh" value="<?php echo $row['cod_rh'] ?>">
                        <tr>
                            <td><?php echo $row['des_rh'] ?></td>
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