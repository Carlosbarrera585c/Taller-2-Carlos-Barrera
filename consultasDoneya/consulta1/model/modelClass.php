<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getAll() {
        try {
            $sql = "SELECT count(aprendiz.id_apre), fase_desercion
FROM aprendiz, desercion
WHERE desercion.id_apre=aprendiz.id_apre group by fase_desercion";
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