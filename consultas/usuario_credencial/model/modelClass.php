<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($id) {
        try {
            $sql = "SELECT usuario_credencial.id, usuario_credencial.usuario_id, usuario_credencial.credencial_id FROM usuario_credencial WHERE usuario_credencial.id = '$id'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textId) {
        try {
            $sql = "SELECT usuario_credencial.id FROM usuario_credencial WHERE usuario_credencial.id = '$textId'";
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
            $sql = 'SELECT usuario_credencial.id, usuario_credencial.usuario_id, usuario_credencial.credencial_id FROM usuario_credencial';
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
