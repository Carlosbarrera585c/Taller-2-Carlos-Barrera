<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($cod_pro) {
        try {
            $sql = "SELECT programa.cod_pro, programa.des_prog, programa.estado FROM programa WHERE programa.cod_pro = '$cod_pro'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textCod) {
        try {
            $sql = "SELECT programa.cod_pro FROM programa WHERE programa.cod_pro = '$textCod'";
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

            $sql = "UPDATE programa SET ";

            foreach ($data as $key => $value) {
                $sql = $sql . " " . $key . " = '" . $value . "', ";
            }

            $newLeng = strlen($sql) - 2;
            $sql = substr($sql, 0, $newLeng);

            $sql = $sql . " WHERE cod_pro ='$textCod'";

            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                    throw new PDOException("El Programa no ha podido ser actualizado");
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
    static public function delete($textCod) {
        try {

            $sql = "DELETE FROM programa WHERE cod_pro = " . $textCod;

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
            $sql = 'SELECT programa.cod_pro, programa.des_prog, programa.estado FROM programa';
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
    static public function putNew($textCod, $textDes, $textEsta) {
        try {
            $sql = "INSERT INTO programa (cod_pro, des_prog, estado) VALUES ('$textCod', '$textDes','$textEsta')";
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
