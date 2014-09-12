<?php

require_once 'DataBaseClass.php';
$codtipoid = $_POST['codtipoid'];
$destipoid = $_POST['destipoid'];
$tipodoc = $_POST['tipodoc'];
$sql = "INSERT INTO tipo_id" . "(cod_tipo_id,des_tipo_id,tipo_doc) " . "VALUES ('$codtipoid','$destipoid','$tipodoc')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "<PRE>";
    echo "Se Subieron Los Siguientes Campos: " . "<br>" . "Codigo del Tipo Id: " . $codtipoid . "<br>" . "Descripcion del Tipo Id: " . $destipoid . "<br>" . "Tipo Dococumento Es: " . $tipodoc;
    echo "</PRE>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    if ($ex->getCode() == 23000) {
        echo 'UNO DE LOS DATOS ESTA DUPULICADO';
    } else {
        echo $ex->getMessage();
    }
}