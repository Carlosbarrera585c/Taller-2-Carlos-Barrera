<?php

require_once ('DataBaseClass.php');
$cod_ciudad = $_POST['cod_ciudad'];
$nom_ciudad = $_POST['nom_ciudad'];
$cod_depto = $_POST['cod_depto'];
$habitantes = $_POST['habitantes'];
$sql = "DELETE from ciudad where cod_ciudad='$cod_ciudad'";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['cod_ciudad'] . " Se elimino <br>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>