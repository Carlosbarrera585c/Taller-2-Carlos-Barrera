<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($num_doc) {
        try {
            $sql = "SELECT desercion.num_doc, desercion.fecha, desercion.id_apre, desercion.num_ficha, desercion.cod_causa, desercion.fecha_desercion, desercion.fase_desercion FROM desercion WHERE desercion.num_doc = '$num_doc'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textDoc) {
        try {
            $sql = "SELECT desercion.num_doc FROM desercion WHERE desercion.num_doc = '$textDoc'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    /**
     * 
     * @return \PDOException
     */
    static public function getAll() {
        try {
            $sql = 'SELECT desercion.num_doc, desercion.fecha, desercion.id_apre, desercion.num_ficha, desercion.cod_causa, desercion.fecha_desercion, desercion.fase_desercion FROM desercion';
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
            /*
              if($e->getCode() === 10) {
              echo 'Base de Datos no encotrada';
              }
             */
        }
    }

}
