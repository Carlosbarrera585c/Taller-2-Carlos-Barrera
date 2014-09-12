<?php

require_once ('DataBaseClass.php');
$id_apre = $_POST['id_apre2'];
$sql = "DELETE from aprendiz WHERE id_apre='$id_apre';";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['id_apre2'] . " Se elimino <br>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>