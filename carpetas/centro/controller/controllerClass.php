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
            $rsp = modelClass::putNew($_POST['textCod'], $_POST['textDes'], $_POST['textTel'], $_POST['textDir'], $_POST['textCiu']);
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
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['cod_centro']) and is_numeric($_GET['cod_centro'])) {
            $certificate = modelClass::certify($_GET['cod_centro']);
            if (is_array($certificate)) {
                if (count($certificate) > 0) {
                    $data = modelClass::getRow($_GET['cod_centro']);
                    if (is_array($data)) {
                        if (count($data) > 0) {
                            $args['textCod'] = $data[0]['cod_centro'];
                            $args['textDes'] = $data[0]['desc_centro'];
                            $args['textTel'] = $data[0]['tel'];
                            $args['textDir'] = $data[0]['dir'];
                            $args['textCiu'] = $data[0]['cod_ciudad'];
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
            $args['formAction'] = 'index.php?action=update&amp;cod_centro=' . $_GET['cod_centro'];
            viewClass::renderHTML('update.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['cod_centro'] = $_POST['textCod'];
            $data['desc_centro'] = $_POST['textDes'];
            $data['tel'] = $_POST['textTel'];
            $data['dir'] = $_POST['textDir'];
            $data['cod_ciudad'] = $_POST['textCiu'];
            $rsp = modelClass::update($_GET['cod_centro'], $data);
            if ($rsp === true) {
                $args['success'] = 'Los cambios fueron realizados exitosamente';
            } else {
                $args['error'] = $rsp->getMessage();
            }
            $args['formAction'] = 'index.php?action=update&amp;cod_centro=' . $_GET['cod_centro'];
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
        $args['formAction'] = 'index.php?action=delete&amp;cod_centro=' . $_GET['cod_centro'];
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['cod_centro']) and is_numeric($_GET['cod_centro'])) {
            viewClass::renderHTML('delete.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['confirmation']) and $_POST['confirmation'] === 'true') {
            $rsp = modelClass::delete($_GET['cod_centro']);
            if ($rsp === true) {
                $args['success'] = 'El registro ' . $_GET['cod_centro'] . ' fue eliminado exitosamente';
            } else {
                $args['error'] = $rsp;
                viewClass::renderHTML('error.php', $args);
            }
            $this->index($args);
        }
    }

    public function notFound() {
        
    }

}
