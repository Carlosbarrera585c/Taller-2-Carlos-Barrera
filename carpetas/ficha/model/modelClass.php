<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($num_ficha) {
        try {
            $sql = "SELECT ficha.num_ficha, ficha.cod_programa, ficha.fecha_ini, ficha.fecha_fin, ficha.cod_centro FROM ficha WHERE ficha.num_ficha = '$num_ficha'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textNum) {
        try {
            $sql = "SELECT ficha.num_ficha FROM ficha WHERE ficha.num_ficha= '$textNum'";
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

            $sql = "UPDATE ficha SET ";

            foreach ($data as $key => $value) {
                $sql = $sql . " " . $key . " = '" . $value . "', ";
            }

            $newLeng = strlen($sql) - 2;
            $sql = substr($sql, 0, $newLeng);

            $sql = $sql . " WHERE num_doc ='$textNum'";

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
    static public function delete($textNum) {
        try {

            $sql = "DELETE FROM ficha WHERE num_ficha = " . $textNum;

            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException("No se Puede Eliminar Este Registro Porque Esta Siendo Usado Por Otra Tabla");
            }
            return $rsp;
        } catch (PDOException $e) {
            return $e;
        }
    }

    /**
     * 
     * @return \PDOException
     */
    static public function getAll() {
        try {
            $sql = 'SELECT ficha.num_ficha, ficha.cod_programa, ficha.fecha_ini, ficha.fecha_fin, ficha.cod_centro FROM ficha';
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
    static public function putNew($textNum, $textCodPro, $textFechaIni, $textFechaFin, $textCodCen) {
        try {
            $sql = "INSERT INTO ficha (num_ficha, cod_programa, fecha_ini, fecha_fin, cod_centro) VALUES ('$textNum', '$textCodPro','$textFechaIni', '$textFechaFin', '$textCodCen')";
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
