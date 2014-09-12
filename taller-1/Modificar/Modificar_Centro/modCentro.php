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
    $cod_centro = $_POST['cod_centro2'];
    $desc_centro = $_POST['desc_centro2'];
    $tel = $_POST['tel2'];
    $dir = $_POST['dir2'];
    $cod_ciudad = $_POST['cod_ciudad2'];

    $sql = "UPDATE centro
      SET desc_centro =
       '$desc_centro',tel=
       '$tel', dir=
       '$dir', cod_ciudad=
           '$cod_ciudad'
      WHERE centro.cod_centro= '$cod_centro';";
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