<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($cod_rh) {
        try {
            $sql = "SELECT rh.cod_rh, rh.des_rh FROM rh WHERE rh.cod_rh = '$cod_rh'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certifyRh($textId) {
        try {
            $sql = "SELECT rh.cod_rh FROM rh WHERE rh.cod_rh = '$textId'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    /**
     * Method to update the user information 
     * @param integer $id Variables container User ID
     * @param array $data Array associative, each position is the name of the columns in database
     * @return \PDOException
     * @throws PDOException
     */
    static public function updateRh($textId, $data) {
        try {

            $sql = "UPDATE rh SET ";

            foreach ($data as $key => $value) {
                $sql = $sql . " " . $key . " = '" . $value . "', ";
            }

            $newLeng = strlen($sql) - 2;
            $sql = substr($sql, 0, $newLeng);

            $sql = $sql . " WHERE cod_rh ='$textId'";

            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException("El rh no ha podido ser actualizado", 2632);
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
    static public function deleteRh($textId) {
        try {

            $sql = "DELETE FROM rh WHERE cod_rh = " . $textId;

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
            $sql = 'SELECT rh.cod_rh, rh.des_rh FROM rh';
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
     * @param type $textId, $textDes
     * 
     * @return \PDOException
     */
    static public function putNewRh($textId, $textDes) {
        try {
            $sql = "INSERT INTO rh (cod_rh, des_rh) VALUES ('$textId', '$textDes')";
            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException("El Codigo $textId está siendo usado", 2745);
            }

            return $rsp;
        } catch (PDOException $e) {
            return $e;
        }
    }

}
