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
    if (!is_numeric($_POST['num_doc'])) {
        throw new PDOException('numero de documento no es numerico');
    }
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
        <title>Campos a Eliminar</title>
    </head>
    <body>
        <form name="datos" method="post" action="delDesercion.php">
            <div align="center">
                <table border="1">
                    <tr>
                        <th>Fecha</th>
                        <th>ID Aprendiz</th>
                        <th>Numero de Ficha</th>
                        <th>codigo de la Causa</th>
                        <th>Fecha de Desercion</th>
                        <th>Fase de la Desercion</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="num_doc" value="<?php echo $row['num_doc'] ?>">
                        <tr>
                            <td><input type="text" name="fecha" value="<?php echo $row['fecha'] ?>"></td>
                            <td><input type="text" name="id_apre" value="<?php echo $row['id_apre'] ?>"></td>
                            <td><input type="text" name="num_ficha" value="<?php echo $row['num_ficha'] ?>"></td>
                            <td><input type="text" name="cod_causa" value="<?php echo $row['cod_causa'] ?>"></td>
                            <td><input type="text" name="fecha_desercion" value="<?php echo $row['fecha_desercion'] ?>"></td>
                            <td><input type="text" name="fase_desercion" value="<?php echo $row['fase_desercion'] ?>"></td>
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