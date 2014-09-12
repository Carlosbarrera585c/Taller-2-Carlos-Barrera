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
    $sql = "SELECT * from ficha where num_ficha='$num_ficha'";
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
        <form name="datos" method="post" action="delFicha.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>codigo del Programa </th>
                        <th>Fecha de Inicio</th>
                        <th>Fecha de finalizacion</th>
                        <th>Codigo del Centro</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="num_ficha" value="<?php echo $row['num_ficha'] ?>">
                        <tr>
                            <td><input type="text" name="cod_programa" value="<?php echo $row['cod_programa'] ?>" size="5"></td>
                            <td><input type="text" name="fecha_ini" value="<?php echo $row['fecha_ini'] ?>"></td>
                            <td><input type="text" name="fecha_fin" value="<?php echo $row['fecha_fin'] ?>"></td>
                            <td><input type="text" name="cod_centro" value="<?php echo $row['cod_centro'] ?>" size="5"></td>
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