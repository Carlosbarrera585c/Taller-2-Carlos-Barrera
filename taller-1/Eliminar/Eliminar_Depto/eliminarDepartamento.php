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
        <title>Campos a Eliminar</title>
    </head>
    <body>
        <form name="datos" method="post" action="delDepartamento.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Nombre del Departamento </th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="cod_depto" value="<?php echo $row['cod_depto'] ?>">
                        <tr>
                            <td><input type="text" name="nom_depto" value="<?php echo $row['nom_depto'] ?>"></td>
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