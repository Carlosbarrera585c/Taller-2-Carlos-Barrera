<?php

/**
 * Description of controllerClass
 *
 * @author Carlos Barrera
 */
class controllerClass {

    public function index($args = NULL) {
        $args['datos'] = modelClass::getAll();

        if (is_array($args['datos'])) {
            viewClass::renderHTML('index.php', $args);
        } else {
            viewClass::renderHTML('error.php', $args);
        }
    }

    /**
     * Create a new user
     */
    public function create() {
        $template = 'create.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $rsp = modelClass::putNew($_POST['textNum'], $_POST['textCodPro'], $_POST['textFechaIni'], $_POST['textFechaFin'], $_POST['textCodCen']);
            if ($rsp === true) {
                $args['success'] = 'El registro fue realizado exitosamente';
                $this->index($args);
            } else {
                $args['error'] = $rsp->getMessage();
                $args['formAction'] = 'index.php?action=create';
                $args = array_merge($args, $_POST);
                viewClass::renderHTML($template, $args);
            }
        } else {
            $args['formAction'] = 'index.php?action=create';
            viewClass::renderHTML($template, $args);
        }
    }

    /**
     * Update a user
     */
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['num_ficha']) and is_numeric($_GET['num_ficha'])) {
            $certificate = modelClass::certify($_GET['num_ficha']);
            if (is_array($certificate)) {
                if (count($certificate) > 0) {
                    $data = modelClass::getRow($_GET['num_ficha']);
                    if (is_array($data)) {
                        if (count($data) > 0) {
                            $args['textNum'] = $data[0]['num_ficha'];
                            $args['textCodPro'] = $data[0]['cod_programa'];
                            $args['textFechaIni'] = $data[0]['fecha_ini'];
                            $args['textFechaFin'] = $data[0]['fecha_fin'];
                            $args['textCodCen'] = $data[0]['cod_centro'];
                        }
                    } else {
                        $args['error'] = $data;
                        viewClass::renderHTML('error.php', $args);
                    }
                }
            } else {
                $args['error'] = $certificate;
                viewClass::renderHTML('error.php', $args);
            }
            $args['formAction'] = 'index.php?action=update&amp;num_ficha=' . $_GET['num_ficha'];
            viewClass::renderHTML('update.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['num_ficha'] = $_POST['textNum'];
            $data['cod_programa'] = $_POST['textCodPro'];
            $data['fecha_ini'] = $_POST['textFechaIni'];
            $data['fecha_fin'] = $_POST['textFechaFin'];
            $data['cod_centro'] = $_POST['textCodCen'];
            $rsp = modelClass::update($_GET['num_ficha'], $data);
            if ($rsp === true) {
                $args['success'] = 'Los cambios fueron realizados exitosamente';
            } else {
                $args['error'] = $rsp->getMessage();
            }
            $args['formAction'] = 'index.php?action=update&amp;num_ficha=' . $_GET['num_ficha'];
            $args = array_merge($args, $_POST);
            viewClass::renderHTML('update.php', $args);
        } else {
            $this->index();
        }
    }

    /**
     * Delete a user
     */
    public function delete() {
        $args['formAction'] = 'index.php?action=delete&amp;num_ficha=' . $_GET['num_ficha'];
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['num_ficha']) and is_numeric($_GET['num_ficha'])) {
            viewClass::renderHTML('delete.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['confirmation']) and $_POST['confirmation'] === 'true') {
            $rsp = modelClass::delete($_GET['num_ficha']);
            if ($rsp === true) {
                $args['success'] = 'El registro ' . $_GET['num_ficha'] . ' fue eliminado exitosamente';
            } else {
                $args['error'] = $rsp->getMessage();
            }
            $this->index($args);
        }
    }

    public function notFound() {
        
    }

}
