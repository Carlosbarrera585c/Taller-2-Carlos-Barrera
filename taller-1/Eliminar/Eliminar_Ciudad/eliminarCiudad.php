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
$cod_ciudad = $_POST['cod_ciudad'];
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $sql = "SELECT * from ciudad where cod_ciudad='$cod_ciudad'";
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
        <form name="datos" method="post" action="delCiudad.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Nombre de la Ciudad </th>
                        <th>Codigo de Departamento</th>
                        <th>Habitantes</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_ciudad" value="<?php echo $row['cod_ciudad'] ?>">
                        <tr>
                            <td><input type="text" name="nom_ciudad" value="<?php echo $row['nom_ciudad'] ?>"></td>
                            <td><input type="text" name="cod_depto" value="<?php echo $row['cod_depto'] ?>"></td>
                            <td><input type="text" name="habitantes" value="<?php echo $row['habitantes'] ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="8"><div align="center"><input name="submit" type="submit" value="Eliminar"></div></td>
                        </tr>
                    <?php endforeach ?>
                </table>
                <p></p>	
            </div>
        </form>
    </body>
</html>