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
            $rsp = modelClass::putNew($_POST['textId'], $_POST['textUsuId'], $_POST['textNom'], $_POST['textApel'], $_POST['textDir'], $_POST['textTel'], $_POST['textLocalId']);
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
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['id']) and is_numeric($_GET['id'])) {
            $certificate = modelClass::certify($_GET['id']);
            if (is_array($certificate)) {
                if (count($certificate) > 0) {
                    $data = modelClass::getRow($_GET['id']);
                    if (is_array($data)) {
                        if (count($data) > 0) {
                            $args['textId'] = $data[0]['id'];
                            $args['textUsuId'] = $data[0]['usuario_id'];
                            $args['textNom'] = $data[0]['nombre'];
                            $args['textApel'] = $data[0]['apellido'];
                            $args['textDir'] = $data[0]['direccion'];
                            $args['textTel'] = $data[0]['telefono'];
                            $args['textLocalId'] = $data[0]['localidad_id'];
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
            $args['formAction'] = 'index.php?action=update&amp;id=' . $_GET['id'];
            viewClass::renderHTML('update.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['id'] = $_POST['textId'];
            $data['usuario_id'] = $_POST['textUsuId'];
            $data['nombre'] = $_POST['textNom'];
            $data['apellido'] = $_POST['textApel'];
            $data['direccion'] = $_POST['textDir'];
            $data['telefono'] = $_POST['textTel'];
            $data['localidad_id'] = $_POST['textLocalId'];

            $rsp = modelClass::update($_GET['id'], $data);
            if ($rsp === true) {
                $args['success'] = 'Los cambios fueron realizados exitosamente';
            } else {
                $args['error'] = $rsp->getMessage();
            }
            $args['formAction'] = 'index.php?action=update&amp;id=' . $_GET['id'];
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
        $args['formAction'] = 'index.php?action=delete&amp;id=' . $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['id']) and is_numeric($_GET['id'])) {
            viewClass::renderHTML('delete.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['confirmation']) and $_POST['confirmation'] === 'true') {
            $rsp = modelClass::delete($_GET['id']);
            if ($rsp === true) {
                $args['success'] = 'El registro ' . $_GET['id'] . ' fue eliminado exitosamente';
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
