<?php

require_once ('DataBaseClass.php');
$cod_causa = $_POST['cod_causa'];
$sql = "DELETE from causa_desercion where cod_causa='$cod_causa'";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_causa'] . " Se elimino<br>";
    } catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>