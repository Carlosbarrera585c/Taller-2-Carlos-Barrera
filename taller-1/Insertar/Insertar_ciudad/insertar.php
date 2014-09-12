<?php

require_once 'DataBaseClass.php';
$codciudad = $_POST['codciudad'];
$nomciudad = $_POST['nomciudad'];
$coddepto = $_POST['coddepto'];
$habitantes = $_POST['habitantes'];
$sql = "INSERT INTO ciudad" . "(cod_ciudad,nom_ciudad,cod_depto,habitantes) " . "VALUES ('$codciudad','$nomciudad','$coddepto','$habitantes')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "<PRE>";
    echo "Se Subieron Los Campos" . "Codigo Ciudad: " . $codciudad . "Nombre de la Ciudad: " . $nomciudad . "Codigo del Departamento: " . $coddepto . "Habitantes: " . $habitantes;
    echo "</PRE>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    if ($ex->getCode() == 23000) {
        echo 'UNO DE LOS DATOS ESTA DUPLICADO';
    } else {
        echo $ex->getMessage();
    }
}