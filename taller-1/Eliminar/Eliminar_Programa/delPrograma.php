<?php

require_once ('DataBaseClass.php');
$cod_pro = $_POST['cod_pro'];
$sql = "DELETE from programa where cod_pro='$cod_pro'";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_pro'] . " Se elimino <br>";
   } catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>