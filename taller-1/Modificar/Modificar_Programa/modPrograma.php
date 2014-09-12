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
$cod_pro = $_POST['cod_pro2'];
$des_pro = $_POST['des_pro2'];
$estado = $_POST['estado2'];

$sql = "UPDATE programa
      SET des_prog = '$des_pro',
          estado = '$estado'   
      WHERE programa.cod_pro= '$cod_pro';";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
echo "Se modifico Correctamente";
?>