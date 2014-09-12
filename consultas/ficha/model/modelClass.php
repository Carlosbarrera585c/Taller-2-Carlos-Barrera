<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($num_ficha) {
        try {
            $sql = "SELECT ficha.num_ficha, ficha.cod_programa, ficha.fecha_ini, ficha.fecha_fin, ficha.cod_centro FROM ficha WHERE ficha.num_ficha = '$num_ficha'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textNum) {
        try {
            $sql = "SELECT ficha.num_ficha FROM ficha WHERE ficha.num_ficha= '$textNum'";
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
            $sql = 'SELECT ficha.num_ficha, ficha.cod_programa, ficha.fecha_ini, ficha.fecha_fin, ficha.cod_centro FROM ficha';
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
