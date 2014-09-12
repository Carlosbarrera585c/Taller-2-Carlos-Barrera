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
    $cod_tipo_id = $_POST['cod_tipo_id2'];
    $des_tipo_id = $_POST['des_tipo_id2'];
    $tipo_doc = $_POST['tipo_doc2'];

    $sql = "UPDATE tipo_id
      SET des_tipo_id = '$des_tipo_id',
          tipo_doc= '$tipo_doc'   
      WHERE tipo_ID.cod_tipo_id= '$cod_tipo_id';";
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