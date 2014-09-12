<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($id) {
        try {
            $sql = "SELECT datos_usuario.id, datos_usuario.usuario_id, datos_usuario.nombre, datos_usuario.apellido, datos_usuario.direccion, datos_usuario.telefono, datos_usuario.localidad_id FROM datos_usuario WHERE datos_usuario.id = '$id'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textId) {
        try {
            $sql = "SELECT datos_usuario.id FROM datos_usuario WHERE datos_usuario.id = '$textId'";
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
            $sql = 'SELECT datos_usuario.id, datos_usuario.usuario_id, datos_usuario.nombre, datos_usuario.apellido, datos_usuario.direccion, datos_usuario.telefono, datos_usuario.localidad_id FROM datos_usuario';
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
