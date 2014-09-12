<?php

require_once 'DataBaseClass.php';
$numdoc = $_POST['numdoc'];
$fecha = $_POST['fecha'];
$idapre = $_POST['idapre'];
$numficha = $_POST['numficha'];
$codcausa = $_POST['codcausa'];
$fechadeser = $_POST['fechadeser'];
$fasedeser = $_POST['fasedeser'];
$sql = "INSERT INTO desercion" . "(num_doc,fecha,id_apre,num_ficha,cod_causa,fecha_desercion,fase_desercion) " . "VALUES ('$numdoc','$fecha','$idapre','$numficha','$codcausa','$fechadeser','$fasedeser')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "<PRE>";
    echo "Se Subieron Los Campos" . "<br>" . "Numero de Documento: " . $numdoc . "<br>" . "La Fecha es: " . $fecha . "<br>" . "La Identificacion del Aprendiz es: " . $idapre . "<br>" . "El Numero de la Ficha es: " . $numficha . "<br>" . "El Codigo de la Causa es: " . $codcausa . "<br>" . "La Fecha de Desercion es: " . $fechadeser . "<br>" . "La Fase de Desercion es: " . $fasedeser;
    echo "</PRE>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    if ($ex->getCode() == 23000) {
        echo 'UNO DE LOS DATOS ESTA DUPLICADO';
    } else {
        echo $ex->getMessage();
    }
}