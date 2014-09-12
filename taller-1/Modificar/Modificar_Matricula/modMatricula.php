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
$num_ficha = $_POST['num_ficha2'];
$id_apre = $_POST['id_apre2'];
$estado = $_POST['estado2'];

$sql = "UPDATE matricula
      SET id_apre = '$id_apre',
           estado= '$estado'   
      WHERE matricula.num_ficha= '$num_ficha';";
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