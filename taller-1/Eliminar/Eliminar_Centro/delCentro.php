<?php

require_once ('DataBaseClass.php');
$cod_centro = $_POST['cod_centro'];

$sql = "DELETE from centro WHERE cod_centro='$cod_centro'";
try {
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_centro'] . " Se elimino <br>";
 } catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>