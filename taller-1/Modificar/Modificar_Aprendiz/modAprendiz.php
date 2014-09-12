<html>
    <head>
        <title>Insertar Registros</title>
        <style type="text/css">
            <!--
            body {
                background-color: #00BFFF;
            }
            body,td,th {
                color: #0B3B17;
            }
            -->
        </style></head>

<?php
require_once ('DataBaseClass.php');
$id_apre = $_POST['id_apre2'];
$nom_apre = $_POST['nom_apre2'];
$apel_apre = $_POST['apel_apre2'];
$tel_apre= $_POST['tel_apre2'];
$cod_ciudad = $_POST['cod_ciudad2'];
$cod_tipo_id = $_POST['cod_tipo_id2'];
$cod_rh = $_POST['cod_rh2'];
$genero = $_POST['genero2'];
$edad= $_POST['edad2'];
$sql = "UPDATE aprendiz 
      SET nom_apre =
       '$nom_apre', apel_aprn =
       '$apel_apre',telefono_apre =
       '$tel_apre', cod_ciudad =
       '$cod_ciudad', cod_tipo_id =
       '$cod_tipo_id', cod_rh  = 
       '$cod_rh', genero  =
       '$genero', edad  =
       '$edad'   
      WHERE aprendiz.id_apre = '$id_apre';";
    try {
        $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
        $objDB->getInstance()->beginTransaction();
        $objDB->getInstance()->exec($sql);
        $objDB->getInstance()->commit();
        echo "Se modifico Correctamente";
    } catch (PDOException $ex) {
        $objDB->getInstance()->rollback();
        if ($ex->getCode() == 23000) {
            echo 'ESTE CAMPO NO SE PUEDE MODIFICAR';
        } else {
            echo $ex->getMessage();
        }
    }
    ?>