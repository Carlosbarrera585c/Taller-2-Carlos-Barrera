<?php

require_once 'DataBaseClass.php';
$codcentro = $_POST['codcentro'];
$descentro = $_POST['descentro'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$codciudad = $_POST['codciudad'];
$sql = "INSERT INTO centro" . "(cod_centro,desc_centro,tel,dir,cod_ciudad) " . "VALUES ('$codcentro','$descentro','$telefono','$direccion','$codciudad')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "<PRE>";
    echo "Se Subieron Los Siguientes Campos: " . "<br>" . "Codigo Causa del Centro: " . $codcentro . "<br>" . "Descripcion del Centro: " . $descentro . "<br>" . "Telefono :" . $telefono . "<br>" . "Codigo de la Ciudad :" . $codciudad;
    echo "</PRE>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    if ($ex->getCode() == 23000) {
        echo 'UNO DE LOS DATOS ESTA DUPULICADO';
    } else {
        echo $ex->getMessage();
    }
}
//header('location:http://localhost/tarea_visual/inserta_centro/...php)
//exit;
 
