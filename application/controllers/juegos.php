<?php

class Juegos extends Controller {

    function __construct() {

        $this->data['controller'] = strtolower(get_class($this));
    }

    function load_list() {

        $_info_juegos = $this->loadModel('juegos_model');
        $_items_juegos = $_info_juegos->get();
        $template = $this->loadView($this->data['controller'] . '/load_list');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_juegos', $_items_juegos);
        $template->render();
    }

    function load_add() {

        $template = $this->loadView($this->data['controller'] . '/load_add');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_paises', $_items_paises);
        $template->set('items_profesion', $_items_profesion);
        $template->set('items_departamentos', $_items_departamentos);
        $template->render();
    }


}
?>

