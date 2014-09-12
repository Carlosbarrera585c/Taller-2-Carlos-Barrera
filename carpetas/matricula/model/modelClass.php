<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($num_ficha) {
        try {
            $sql = "SELECT matricula.num_ficha, matricula.id_apre, matricula.estado FROM matricula WHERE matricula.num_ficha = '$num_ficha'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textNum) {
        try {
            $sql = "SELECT matricula.num_ficha FROM matricula WHERE matricula.num_ficha = '$textNum'";
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
    static public function update($textNum, $data) {
        try {

            $sql = "UPDATE matricula SET ";

            foreach ($data as $key => $value) {
                $sql = $sql . " " . $key . " = '" . $value . "', ";
            }

            $newLeng = strlen($sql) - 2;
            $sql = substr($sql, 0, $newLeng);

            $sql = $sql . " WHERE num_ficha ='$textNum'";

            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                    throw new PDOException("La Matricula no ha podido ser actualizada");
            }
            return $rsp;
        } catch (PDOException $e) {
                     return $e;
        }
    }

    /**
     * Method to delete a user
     * @param integer $id Variables container User ID
     * @return \PDOException
     * @throws PDOException
     */
    static public function delete($textNum) {
        try {

            $sql = "DELETE FROM matricula WHERE num_ficha = " . $textNum;

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
            $sql = 'SELECT matricula.num_ficha, matricula.id_apre, matricula.estado FROM matricula';
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
    static public function putNew($textNum, $textId, $textEsta) {
        try {
            $sql = "INSERT INTO matricula (num_ficha, id_apre, estado) VALUES ('$textNum', '$textId','$textEsta')";
            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException("El Codigo $textNum está siendo usado", 2745);
            }

            return $rsp;
        } catch (PDOException $e) {
            return $e;
        }
    }

}
