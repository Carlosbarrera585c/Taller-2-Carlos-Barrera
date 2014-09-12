<?php

require_once 'DataBaseClass.php';

$num_ficha = $_POST['numficha'];
$idapre = $_POST['idapre'];
$estado = $_POST['estado'];

$sql = "INSERT INTO matricula" . "(num_ficha, id_apre, estado) " . "VALUES ('$num_ficha','$idapre','$estado')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "<PRE>";
    echo "Se Subieron los Campos: " . "<br>" . "Numero de Ficha: " . $num_ficha ."<br>". "Codigo de Aprendiz: " . $idapre ."<br>". "Estado: " . $estado;
    echo "</PRE>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    if ($ex->getCode() == 23000) {
        echo 'UNO DE LOS DATOS ESTA DUPLICADO';
    } else {
        echo $ex->getMessage();
    }
}