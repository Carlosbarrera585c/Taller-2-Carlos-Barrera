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
$cod_ciudad = $_POST['cod_ciudad2'];
$nom_ciudad = $_POST['nom_ciudad2'];
$cod_depto = $_POST['cod_depto2'];
$habitantes = $_POST['habitantes2'];

$sql = "UPDATE ciudad
      SET nom_ciudad = '$nom_ciudad', 
          cod_depto = '$cod_depto',
          habitantes= '$habitantes'
      WHERE ciudad.cod_ciudad= '$cod_ciudad';";
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