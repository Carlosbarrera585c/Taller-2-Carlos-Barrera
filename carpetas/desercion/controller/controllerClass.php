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
            $rsp = modelClass::putNew($_POST['textDoc'], $_POST['textFecha'], $_POST['textIdApre'], $_POST['textNumFicha'], $_POST['textCodCausa'], $_POST['textFecha'], $_POST['textFase']);
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
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['num_doc']) and is_numeric($_GET['num_doc'])) {
            $certificate = modelClass::certify($_GET['num_doc']);
            if (is_array($certificate)) {
                if (count($certificate) > 0) {
                    $data = modelClass::getRow($_GET['num_doc']);
                    if (is_array($data)) {
                        if (count($data) > 0) {
                            $args['textDoc'] = $data[0]['num_doc'];
                            $args['textFecha'] = $data[0]['fecha'];
                            $args['textIdApre'] = $data[0]['id_apre'];
                            $args['textNumFicha'] = $data[0]['num_ficha'];
                            $args['textCodCausa'] = $data[0]['cod_causa'];
                            $args['textFechaDeser'] = $data[0]['fecha_desercion'];
                            $args['textFase'] = $data[0]['fase_desercion'];
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
            $args['formAction'] = 'index.php?action=update&amp;num_doc=' . $_GET['num_doc'];
            viewClass::renderHTML('update.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['num_doc'] = $_POST['textDoc'];
            $data['fecha'] = $_POST['textFecha'];
            $data['id_apre'] = $_POST['textIdApre'];
            $data['num_ficha'] = $_POST['textNumFicha'];
            $data['cod_causa'] = $_POST['textCodCausa'];
            $data['fecha_desercion'] = $_POST['textFechaDeser'];
            $data['fase_desercion'] = $_POST['textFase'];
            $rsp = modelClass::update($_GET['num_doc'], $data);
            if ($rsp === true) {
                $args['success'] = 'Los cambios fueron realizados exitosamente';
            } else {
                $args['error'] = $rsp->getMessage();
            }
            $args['formAction'] = 'index.php?action=update&amp;num_doc=' . $_GET['num_doc'];
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
        $args['formAction'] = 'index.php?action=delete&amp;num_doc=' . $_GET['num_doc'];
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['num_doc']) and is_numeric($_GET['num_doc'])) {
            viewClass::renderHTML('delete.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['confirmation']) and $_POST['confirmation'] === 'true') {
            $rsp = modelClass::delete($_GET['num_doc']);
            if ($rsp === true) {
                $args['success'] = 'El registro ' . $_GET['num_doc'] . ' fue eliminado exitosamente';
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
