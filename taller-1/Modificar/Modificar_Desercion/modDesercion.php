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
    $num_doc = $_POST['num_doc2'];
    $fecha = $_POST['fecha2'];
    $id_apre = $_POST['id_apre2'];
    $num_ficha = $_POST['num_ficha2'];
    $cod_causa = $_POST['cod_causa2'];
    $fecha_desercion = $_POST['fecha_desercion2'];
    $fase_desercion = $_POST['fase_desercion2'];

    $sql = "UPDATE desercion
      SET fecha = '$fecha',
          id_apre='$id_apre',
              num_ficha='$num_ficha',
                  cod_causa='$cod_causa',
                      fecha_desercion='$fecha_desercion',
                          fase_desercion='$fase_desercion'
      WHERE desercion.num_doc= '$num_doc';";
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