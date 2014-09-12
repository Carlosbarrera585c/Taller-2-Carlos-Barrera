<?php

require_once 'DataBaseClass.php';
$numficha = $_POST['numficha'];
$codprog = $_POST['codprograma'];
$fechaini = $_POST['fechaini'];
$fechafin = $_POST['fechafin'];
$codcentro = $_POST['codcentro'];
$sql = "INSERT INTO ficha" . "(num_ficha,cod_programa,fecha_ini,fecha_fin,cod_centro) " . "VALUES ('$numficha','$codprog','$fechaini','$fechafin','$codcentro')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "<PRE>";
    echo "Se Subieron Los Campos: " ."<br>". "Numero de Ficha: " . $numficha ."<br>". "Codigo del Programa: " . $codprog . "<br>" . "Fecha Inicio: " . $fechaini . "<br>" . "fecha fin: " . $fechafin . "<br>" . "Codigo Centro: " . $codcentro;
    echo "</PRE>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    if ($ex->getCode() == 23000) {
        echo 'UNO DE LOS DATOS ESTA DUPLICADO';
    } else {
        echo $ex->getMessage();
    }
}
