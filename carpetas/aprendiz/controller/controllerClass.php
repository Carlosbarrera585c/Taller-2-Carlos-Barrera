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
            $rsp = modelClass::putNew($_POST['textId'], $_POST['textNom'], $_POST['textApel'], $_POST['textCiu'], $_POST['textTipoId'], $_POST['textRh'], $_POST['textGen'], $_POST['textEdad'], $_POST['textTel']);
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
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['id_apre']) and is_numeric($_GET['id_apre'])) {
            $certificate = modelClass::certify($_GET['id_apre']);
            if (is_array($certificate)) {
                if (count($certificate) > 0) {
                    $data = modelClass::getRow($_GET['id_apre']);
                    if (is_array($data)) {
                        if (count($data) > 0) {
                            $args['textId'] = $data[0]['id_apre'];
                            $args['textNom'] = $data[0]['nom_apre'];
                            $args['textApel'] = $data[0]['apel_aprn'];
                            $args['textCiu'] = $data[0]['cod_ciudad'];
                            $args['textTipoId'] = $data[0]['cod_tipo_id'];
                            $args['textRh'] = $data[0]['cod_rh'];
                            $args['textGen'] = $data[0]['genero'];
                            $args['textEdad'] = $data[0]['edad'];
                            $args['textTel'] = $data[0]['telefono_apre'];
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
            $args['formAction'] = 'index.php?action=update&amp;id_apre=' . $_GET['id_apre'];
            viewClass::renderHTML('update.php', $args);
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data['id_apre'] = $_POST['textId'];
            $data['nom_apre'] = $_POST['textNom'];
            $data['apel_aprn'] = $_POST['textApel'];
            $data['cod_ciudad'] = $_POST['textCiu'];
            $data['cod_tipo_id'] = $_POST['textTipoId'];
            $data['cod_rh'] = $_POST['textRh'];
            $data['genero'] = $_POST['textGen'];
            $data['edad'] = $_POST['textEdad'];
            $data['telefono_apre'] = $_POST['textTel'];

            $rsp = modelClass::update($_GET['id_apre'], $data);
            if ($rsp === true) {
                $args['success'] = 'Los cambios fueron realizados exitosamente';
            } else {
                $args['error'] = $rsp->getMessage();
            }
            $args['formAction'] = 'index.php?action=update&amp;id_apre=' . $_GET['id_apre'];
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
        $args['formAction'] = 'index.php?action=delete&amp;id_apre=' . $_GET['id_apre'];
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['id_apre']) and is_numeric($_GET['id_apre'])) {
            viewClass::renderHTML('delete.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['confirmation']) and $_POST['confirmation'] === 'true') {
            $rsp = modelClass::delete($_GET['id_apre']);
            if ($rsp === true) {
                $args['success'] = 'El registro ' . $_GET['id_apre'] . ' fue eliminado exitosamente';
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
