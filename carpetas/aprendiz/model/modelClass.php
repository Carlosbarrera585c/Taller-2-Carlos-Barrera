<?php

/**
 * Description of modelClass
 *
 * @author Carlos Barrera
 */
class modelClass {

    static public function getRow($id_apre) {
        try {
            $sql = "SELECT aprendiz.id_apre, aprendiz.nom_apre, aprendiz.apel_aprn, aprendiz.cod_ciudad, aprendiz.cod_tipo_id, aprendiz.cod_rh, aprendiz.genero, aprendiz.edad, aprendiz.telefono_apre FROM aprendiz WHERE aprendiz.id_apre = '$id_apre'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certify($textId) {
        try {
            $sql = "SELECT aprendiz.id_apre, aprendiz.nom_apre, aprendiz.apel_aprn, aprendiz.cod_ciudad, aprendiz.cod_tipo_id, aprendiz.cod_rh, aprendiz.genero, aprendiz.edad, aprendiz.telefono_apre FROM aprendiz WHERE aprendiz.id_apre = '$textId'";
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
    static public function update($textId, $data) {
        try {

            $sql = "UPDATE aprendiz SET ";

            foreach ($data as $key => $value) {
                $sql = $sql . " " . $key . " = '" . $value . "', ";
            }

            $newLeng = strlen($sql) - 2;
            $sql = substr($sql, 0, $newLeng);

            $sql = $sql . " WHERE id_apre ='$textId'";

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
    static public function delete($textId) {
        try {

            $sql = "DELETE FROM aprendiz WHERE id_apre = " . $textId;

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
            $sql = 'SELECT aprendiz.id_apre, aprendiz.nom_apre, aprendiz.apel_aprn, aprendiz.cod_ciudad, aprendiz.cod_tipo_id, aprendiz.cod_rh, aprendiz.genero, aprendiz.edad, aprendiz.telefono_apre FROM aprendiz';
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
     * @param type $textId, $textNom, $textApel, $textCiu, $textTipoId, $textRh, $textGen, $textEdad, $textTel
     * 
     * @return \PDOException
     */
    static public function putNew($textId, $textNom, $textApel, $textCiu, $textTipoId, $textRh, $textGen, $textEdad, $textTel) {
        try {
            $sql = "INSERT INTO aprendiz (id_apre, nom_apre, apel_aprn, cod_ciudad, cod_tipo_id, cod_rh, genero, edad, telefono_apre) VALUES ('$textId', '$textNom', '$textApel', '$textCiu', '$textTipoId', '$textRh', '$textGen', '$textEdad', '$textTel')";
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
