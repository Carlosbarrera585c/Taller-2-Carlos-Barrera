<?php

require_once 'DataBaseClass.php';
$cod_prog = $_POST['codprograma'];
$des_prog = $_POST['desprograma'];
$estado = $_POST['estado'];
$sql = "INSERT INTO programa" . "(cod_pro,des_prog,estado) " . "VALUES ('$cod_prog','$des_prog','$estado')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "<PRE>";
    echo "Se Subieron los Campos: " . "<br>" . "Codigo del Programa: " . $cod_prog . "<br>" ."Descripcion del Programa: " . $des_prog . "<br>" . "Estado: " . $estado;
    echo "</PRE>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    if ($ex->getCode() == 23000) {
        echo 'UNO DE LOS DATOS ESTA DUPLICADO';
    } else {
        echo $ex->getMessage();
    }
}