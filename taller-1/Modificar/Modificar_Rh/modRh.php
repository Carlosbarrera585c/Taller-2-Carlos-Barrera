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
$cod_rh = $_POST['cod_rh2'];
$des_rh = $_POST['des_rh2'];

$sql = "UPDATE rh
      SET des_rh = '$des_rh'   
      WHERE rh.cod_rh= '$cod_rh';";
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