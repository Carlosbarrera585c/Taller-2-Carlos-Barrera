<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    /**
     * 
     * @return \PDOException
     */
    static public function getAll() {
        try {
            $sql = "SELECT nom_apre, genero, des_rh, nom_ciudad, des_prog, des_causa
from desercion, aprendiz, rh, ciudad, ficha, programa, causa_desercion
where desercion.id_apre=aprendiz.id_apre
and aprendiz.cod_rh=rh.cod_rh
and aprendiz.cod_ciudad=ciudad.cod_ciudad
and desercion.num_ficha=ficha.num_ficha
and ficha.cod_programa=programa.cod_pro
and desercion.cod_causa=causa_desercion.cod_causa
and aprendiz.genero='m' and causa_desercion.cod_causa='3'";
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

?>