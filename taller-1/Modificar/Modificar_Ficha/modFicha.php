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
$num_ficha= $_POST['num_ficha2'];
$cod_programa = $_POST['cod_programa2'];
$fecha_ini = $_POST['fecha_ini2'];
$fecha_fin = $_POST['fecha_fin2'];
$cod_centro = $_POST['cod_centro2'];

$sql = "UPDATE ficha
      SET num_ficha = '$num_ficha',
          cod_programa='$cod_programa',
              fecha_ini='$fecha_ini',
                  fecha_fin='$fecha_fin',
                      cod_centro='$cod_centro'
      WHERE ficha.num_ficha= '$num_ficha';";
try {
        $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
        $objDB->getInstance()->beginTransaction();
        $objDB->getInstance()->exec($sql);
        $objDB->getInstance()->commit();
        echo "Se modifico Correctamente";
    } catch (PDOException $ex) {
        $objDB->getInstance()->rollback();
        if ($ex -> getCode() == 23000) {
            echo 'ESTE CAMPO NO SE PUEDE MODIFICAR';
        } else {
            echo $ex->getMessage();
        }
    }
        ?>