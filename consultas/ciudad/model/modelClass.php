<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($cod_ciudad) {
        try {
            $sql = "SELECT ciudad.cod_ciudad, ciudad.nom_ciudad, ciudad.cod_depto, ciudad.habitantes FROM ciudad WHERE ciudad.cod_ciudad = '$cod_ciudad'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textCod) {
        try {
            $sql = "SELECT ciudad.cod_ciudad FROM ciudad WHERE ciudad.cod_ciudad = '$textCod'";
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
            $sql = 'SELECT ciudad.cod_ciudad, ciudad.nom_ciudad, ciudad.cod_depto, ciudad.habitantes FROM ciudad';
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
