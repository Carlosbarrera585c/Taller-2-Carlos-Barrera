<?php

require_once 'DataBaseClass.php';

$codrh = $_POST['codrh'];
$desrh = $_POST['desrh'];

$sql = "INSERT INTO rh" . "(cod_rh,des_rh) " . "VALUES ('$codrh','$desrh')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();

    echo "<PRE>";
    echo "Se Subieron los Campos : ". "<br>" . "El Codigo Es: " . $codrh . "<br>" ."La Descripcion Es: " . $desrh;
    echo "</PRE>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    if ($ex->getCode() == 23000) {
        echo 'UNO DE LOS DATOS ESTA DUPLICADO';
    } else {
        echo $ex->getMessage();
    }
}