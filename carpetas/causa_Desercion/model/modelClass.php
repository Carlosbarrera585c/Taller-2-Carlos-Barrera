<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($cod_causa) {
        try {
            $sql = "SELECT causa_desercion.cod_causa, causa_desercion.des_causa, causa_desercion.estado_causa FROM causa_desercion WHERE causa_desercion.cod_causa = '$cod_causa'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textCod) {
        try {
            $sql = "SELECT causa_desercion.cod_causa FROM causa_desercion WHERE causa_desercion.cod_causa = '$textCod'";
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
    static public function update($textCod, $data) {
        try {

            $sql = "UPDATE causa_desercion SET ";

            foreach ($data as $key => $value) {
                $sql = $sql . " " . $key . " = '" . $value . "', ";
            }

            $newLeng = strlen($sql) - 2;
            $sql = substr($sql, 0, $newLeng);

            $sql = $sql . " WHERE cod_causa ='$textCod'";

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
    static public function delete($textCod) {
        try {

            $sql = "DELETE FROM causa_desercion WHERE cod_causa = " . $textCod;

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
            $sql = 'SELECT causa_desercion.cod_causa, causa_desercion.des_causa, causa_desercion.estado_causa FROM causa_desercion';
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
    static public function putNew($textCod, $textDes, $textEs) {
        try {
            $sql = "INSERT INTO causa_desercion (cod_causa, des_causa, estado_causa) VALUES ('$textCod', '$textDes','$textEs')";
            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException("El Codigo $textCod está siendo usado", 2745);
            }

            return $rsp;
        } catch (PDOException $e) {
            return $e;
        }
    }

}
