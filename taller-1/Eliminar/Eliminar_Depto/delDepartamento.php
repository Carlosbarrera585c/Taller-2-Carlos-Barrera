<?php

require_once ('DataBaseClass.php');
$cod_depto = $_POST['cod_depto'];
$sql = "DELETE from depto where cod_depto='$cod_depto'";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_depto'] . " Se elimino <br>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>