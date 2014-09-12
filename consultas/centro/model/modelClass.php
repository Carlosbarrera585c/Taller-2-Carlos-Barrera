<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($cod_centro) {
        try {
            $sql = "SELECT centro.cod_centro, centro.desc_centro, centro.tel, centro.dir, centro.cod_ciudad FROM centro WHERE centro.cod_centro = '$cod_centro'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textCod) {
        try {
            $sql = "SELECT centro.cod_centro FROM centro WHERE centro.cod_centro = '$textCod'";
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
            $sql = 'SELECT centro.cod_centro, centro.desc_centro, centro.tel, centro.dir, centro.cod_ciudad FROM centro';
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