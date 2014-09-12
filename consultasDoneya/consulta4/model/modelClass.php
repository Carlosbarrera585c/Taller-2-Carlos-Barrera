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
            $sql = "SELECT count(num_doc), des_causa 
from ficha, centro, causa_desercion, desercion, ciudad
where desercion.cod_causa=causa_desercion.cod_causa
and desercion.num_ficha=ficha.num_ficha
and ficha.cod_centro=centro.cod_centro
and desc_centro='centro de electricidad y automatizacion industrial' 
group by  des_causa";
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