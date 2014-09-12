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
            $sql = "SELECT count(aprendiz.id_apre), des_causa
FROM aprendiz, desercion, causa_desercion, ficha, centro
WHERE desercion.id_apre=aprendiz.id_apre
and desercion.cod_causa=causa_desercion.cod_causa
and desercion.num_ficha=ficha.num_ficha
and ficha.cod_centro=centro.cod_centro group by des_causa";
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