<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($cod_depto) {
        try {
            $sql = "SELECT depto.cod_depto, depto.nom_depto FROM depto WHERE depto.cod_depto = '$cod_depto'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textCod) {
        try {
            $sql = "SELECT depto.cod_depto FROM depto WHERE depto.cod_depto = '$textCod'";
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
            $sql = 'SELECT depto.cod_depto, depto.nom_depto FROM depto';
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
