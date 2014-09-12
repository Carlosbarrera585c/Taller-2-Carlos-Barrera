<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($id_apre) {
        try {
            $sql = "SELECT aprendiz.id_apre, aprendiz.nom_apre, aprendiz.apel_aprn, aprendiz.cod_ciudad, aprendiz.cod_tipo_id, aprendiz.cod_rh, aprendiz.genero, aprendiz.edad, aprendiz.telefono_apre FROM aprendiz WHERE aprendiz.id_apre = '$id_apre'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textId) {
        try {
            $sql = "SELECT aprendiz.id_apre, aprendiz.nom_apre, aprendiz.apel_aprn, aprendiz.cod_ciudad, aprendiz.cod_tipo_id, aprendiz.cod_rh, aprendiz.genero, aprendiz.edad, aprendiz.telefono_apre FROM aprendiz WHERE aprendiz.id_apre = '$textId'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

   
    static public function getAll() {
        try {
            $sql = 'SELECT aprendiz.id_apre, aprendiz.nom_apre, aprendiz.apel_aprn, aprendiz.cod_ciudad, aprendiz.cod_tipo_id, aprendiz.cod_rh, aprendiz.genero, aprendiz.edad, aprendiz.telefono_apre FROM aprendiz';
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