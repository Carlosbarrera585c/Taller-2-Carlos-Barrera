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
            $sql = "SELECT nom_apre, des_tipo_id, nom_ciudad, nom_depto, desc_centro
FROM aprendiz, desercion, ciudad, tipo_id, depto, centro, ficha, causa_desercion
WHERE desercion.cod_causa=causa_desercion.cod_causa
and desercion.id_apre=aprendiz.id_apre
and desercion.num_ficha=ficha.num_ficha
and aprendiz.cod_tipo_id=tipo_id.cod_tipo_id
and aprendiz.cod_ciudad=ciudad.cod_ciudad
and ciudad.cod_depto=depto.cod_depto
and ficha.cod_centro=centro.cod_centro";
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