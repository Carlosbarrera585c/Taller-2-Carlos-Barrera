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
            $rsp = modelClass::putNewRh($_POST['textId'], $_POST['textDes']);
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
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['cod_rh']) and is_numeric($_GET['cod_rh'])) {
            $certificate = modelClass::certifyRh($_GET['cod_rh']);
            if (is_array($certificate)) {
                if (count($certificate) > 0) {
                    $data = modelClass::getRow($_GET['cod_rh']);
                    if (is_array($data)) {
                        if (count($data) > 0) {
                            $args['textId'] = $data[0]['cod_rh'];
                            $args['textDes'] = $data[0]['des_rh'];
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
            $args['formAction'] = 'index.php?action=update&amp;cod_rh=' . $_GET['cod_rh'];
            viewClass::renderHTML('update.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['cod_rh'] = $_POST['textId'];
            $data['des_rh'] = $_POST['textDes'];
            $rsp = modelClass::updateRh($_GET['cod_rh'], $data);
            if ($rsp === true) {
                $args['success'] = 'Los cambios fueron realizados exitosamente';
            } else {
                $args['error'] = $rsp->getMessage();
            }
            $args['formAction'] = 'index.php?action=update&amp;cod_rh=' . $_GET['cod_rh'];
            $args = array_merge($args, $_POST);
            viewClass::renderHTML('update.php', $args);
        } else {
            $this->index();
        }
    }

    /**
     * Delete a user
     */
    public function deleteRh() {
        $args['formAction'] = 'index.php?action=delete&amp;cod_rh=' . $_GET['cod_rh'];
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['cod_rh']) and is_numeric($_GET['cod_rh'])) {
            viewClass::renderHTML('delete.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['confirmation']) and $_POST['confirmation'] === 'true') {
            $rsp = modelClass::deleteRh($_GET['cod_rh']);
            if ($rsp === true) {
                $args['success'] = 'El registro ' . $_GET['cod_rh'] . ' fue eliminado exitosamente';
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
