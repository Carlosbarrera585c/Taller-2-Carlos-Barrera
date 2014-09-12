<?php

require_once 'DataBaseClass.php';
$cod_causa = $_POST['codcausa'];
$des_causa = $_POST['descausa'];
$estado_causa = $_POST['estadocausa'];
$sql = "INSERT INTO causa_desercion" . "(cod_causa,des_causa,estado_causa) " . "VALUES ('$cod_causa','$des_causa','$estado_causa')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "<PRE>";
    echo "Se Subieron Los Siguientes Campos: " . "<br>" . "Codigo Causa de Desercion: " . $cod_causa . "<br>" . "Descripcion de la Causa de Desercion: " . $des_causa . "<br>" . "Estado de la Desercion :" . $estado_causa;
    echo "</PRE>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    if ($ex->getCode() == 23000) {
        echo 'UNO DE LOS DATOS ESTA DUPLICADO';
    } else {
        echo $ex->getMessage();
    }
}

?>