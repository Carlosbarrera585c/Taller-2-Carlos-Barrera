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
    $cod_causa = $_POST['cod_causa2'];
    $des_causa = $_POST['des_causa2'];
    $estado_causa = $_POST['estado_causa2'];

    $sql = "UPDATE causa_desercion
      SET des_causa =
       '$des_causa', estado_causa=
       '$estado_causa'   
      WHERE causa_desercion.cod_causa= '$cod_causa';";
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