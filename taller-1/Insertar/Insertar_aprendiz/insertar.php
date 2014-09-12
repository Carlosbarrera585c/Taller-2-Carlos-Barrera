<?php

require_once 'DataBaseClass.php';

$id_apre = $_POST['id_apre'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$ciudad = $_POST['ciudad'];
$tipo_id = $_POST['tipo_id'];
$rh = $_POST['rh'];
$genero = $_POST['genero'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];


$sql = "INSERT INTO aprendiz" . "(id_apre,nom_apre,apel_aprn,cod_ciudad,cod_tipo_id,cod_rh,genero,edad,telefono_apre) " . "VALUES ('$id_apre', '$nombre',
'$apellido',
'$ciudad',
'$tipo_id',
'$rh',
'$genero',
'$edad',
'$telefono')";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "<PRE>";
    echo "Se Subieron Los Siguientes Campos: " . "<br>" . "Identificacion Aprendiz: " . $id_apre . "<br>" . "El Nombre Es: " . $nombre . "<br>" . "Su Apellido Es: " . $apellido . "<br>" . "La Ciudad Es: " . $ciudad . "<br>" . "Su Tipo de Identificacion Es: " . $tipo_id . "<br>" . "El Rh Es: " . $rh . "<br>" . "El Genero Es: " . $genero . "<br>" . "La Edad Es: " . $edad . "<br>" . "El Telefono: " . $telefono;
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