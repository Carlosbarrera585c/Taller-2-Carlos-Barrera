<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($cod_causa) {
        try {
            $sql = "SELECT causa_desercion.cod_causa, causa_desercion.des_causa, causa_desercion.estado_causa FROM causa_desercion WHERE causa_desercion.cod_causa = '$cod_causa'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textCod) {
        try {
            $sql = "SELECT causa_desercion.cod_causa FROM causa_desercion WHERE causa_desercion.cod_causa = '$textCod'";
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
            $sql = 'SELECT causa_desercion.cod_causa, causa_desercion.des_causa, causa_desercion.estado_causa FROM causa_desercion';
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