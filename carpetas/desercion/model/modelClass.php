<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($num_doc) {
        try {
            $sql = "SELECT desercion.num_doc, desercion.fecha, desercion.id_apre, desercion.num_ficha, desercion.cod_causa, desercion.fecha_desercion, desercion.fase_desercion FROM desercion WHERE desercion.num_doc = '$num_doc'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textDoc) {
        try {
            $sql = "SELECT desercion.num_doc FROM desercion WHERE desercion.num_doc = '$textDoc'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    /**
     * Method to update the user information 
     * @param integer $textCod Variables container User ID
     * @param array $data Array associative, each position is the name of the columns in database
     * @return \PDOException
     * @throws PDOException
     */
    static public function update($textDoc, $data) {
        try {

            $sql = "UPDATE desercion SET ";

            foreach ($data as $key => $value) {
                $sql = $sql . " " . $key . " = '" . $value . "', ";
            }

            $newLeng = strlen($sql) - 2;
            $sql = substr($sql, 0, $newLeng);

            $sql = $sql . " WHERE num_doc ='$textDoc'";

            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException("La Causa no ha podido ser actualizada", 2632);
            }
            return $rsp;
        } catch (PDOException $e) {
            dataBaseClass::getInstance()->rollback();
            return $e;
        }
    }

    /**
     * Method to delete a user
     * @param integer $id Variables container User ID
     * @return \PDOException
     * @throws PDOException
     */
    static public function delete($textDoc) {
        try {

            $sql = "DELETE FROM desercion WHERE num_doc = " . $textDoc;

            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException();
            }
            return $rsp;
        } catch (PDOException $rsp) {
            return $rsp;
        }
    }

    /**
     * 
     * @return \PDOException
     */
    static public function getAll() {
        try {
            $sql = 'SELECT desercion.num_doc, desercion.fecha, desercion.id_apre, desercion.num_ficha, desercion.cod_causa, desercion.fecha_desercion, desercion.fase_desercion FROM desercion';
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

    /**
     * 
     * @param type $textCod, $textDes, $textEs
     * 
     * @return \PDOException
     */
    static public function putNew($textDoc, $textFecha, $textIdApre, $textNumFicha, $textCodCausa, $textFechaDeser, $textFase) {
        try {
            $sql = "INSERT INTO desercion (num_doc, fecha, id_apre, num_ficha, cod_causa, fecha_desercion, fase_desercion) VALUES ('$textDoc', '$textFecha','$textIdApre', '$textNumFicha', '$textCodCausa', '$textFechaDeser', '$textFase')";
            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException("El Codigo $textDoc está siendo usado", 2745);
            }

            return $rsp;
        } catch (PDOException $e) {
            return $e;
        }
    }

}
