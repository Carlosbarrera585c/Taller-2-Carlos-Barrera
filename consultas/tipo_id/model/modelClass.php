<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($cod_tipo_id) {
        try {
            $sql = "SELECT tipo_id.cod_tipo_id, tipo_id.des_tipo_id, tipo_id.tipo_doc FROM tipo_id WHERE tipo_id.cod_tipo_id = '$cod_tipo_id'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textCod) {
        try {
            $sql = "SELECT tipo_id.cod_tipo_id FROM tipo_id WHERE tipo_id.cod_tipo_id = '$textCod'";
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
            $sql = 'SELECT tipo_id.cod_tipo_id, tipo_id.des_tipo_id, tipo_id.tipo_doc FROM tipo_id';
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
