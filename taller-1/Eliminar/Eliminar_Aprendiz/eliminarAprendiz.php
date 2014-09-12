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
$id_apre = $_POST['id_apre'];
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $sql = "SELECT * from aprendiz where id_apre='$id_apre'";
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
        <form name="datos" method="post" action="delAprendiz.php">
            <div align="center">
                <table width="1204" border="1">
                    <tr>
                        <th width="144">Nombre Aprendiz </th>
                        <th width="144">Apellido Aprendiz </th>
                        <th width="144">Telefono</th>
                        <th width="144">Codigo Ciudad </th>
                        <th width="144">Codigo TipoID</th>
                        <th width="144">Codigo RH </th>
                        <th width="144">Genero  </th>
                        <th width="144">Edad</th>
                    </tr>
                    <?php foreach ($arrData as $row): ?>
                        <input type="hidden" name="id_apre2" value="<?php echo $row['id_apre'] ?>">
                        <tr>
                            <td><?php echo $row['nom_apre'] ?></td>
                            <td><?php echo $row['apel_aprn'] ?></td>
                            <td><?php echo $row['telefono_apre'] ?></td>
                            <td><?php echo $row['cod_ciudad'] ?></td>
                            <td><?php echo $row['cod_tipo_id'] ?></td>
                            <td><?php echo $row['cod_rh'] ?></td>
                            <td><?php echo $row['genero'] ?></td>
                            <td><?php echo $row['edad'] ?></td>
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