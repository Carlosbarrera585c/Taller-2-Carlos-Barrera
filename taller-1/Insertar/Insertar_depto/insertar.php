<?php

require_once 'DataBaseClass.php';
$coddepto = $_POST['coddepto'];
$nomdepto = $_POST['nomdepto'];
$sql = "INSERT INTO depto" . "(cod_depto,nom_depto) " . "VALUES ('$coddepto','$nomdepto')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "<PRE>";
    echo "Se Subieron los Campos:" . "<br>" . "Codigo del Departamento: " . $coddepto . "<br>" . "Nombre del Departamento: " . $nomdepto;
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