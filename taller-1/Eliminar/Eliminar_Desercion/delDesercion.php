<?php

require_once ('DataBaseClass.php');
$num_doc = $_POST['num_doc'];
$sql = "DELETE from desercion where num_doc='$num_doc'";
try {
    $objDB = new DataBaseClass('localhost', 'desercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
    echo "El registro " . $_POST['num_doc'] . " Se elimino <br>";
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}
?>