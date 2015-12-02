
<?php

class Juegos extends Controller {

    function __construct() {

        $this->data['controller'] = strtolower(get_class($this));
    }

    function load_list() {

        $_info_juegos = $this->loadModel('empleados_model');
        $_items_juegos = $_info_empleados->get();
        $template = $this->loadView($this->data['controller'] . '/load_list');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_empleados', $_items_empleados);


        $template->render();
    }

    function load_add() {



        $_info_paises = $this->loadModel('ubigeo_model');
        $_items_paises = $_info_paises->get_paises();

        $_items_departamentos = $_info_paises->get_departamentos();


        $_info_profesion = $this->loadModel('profesion_model');
        $_items_profesion = $_info_profesion->get();



        $template = $this->loadView($this->data['controller'] . '/load_add');
        $template->set('controlador', $this->data['controller']);
        $template->set('items_paises', $_items_paises);
        $template->set('items_profesion', $_items_profesion);
        $template->set('items_departamentos', $_items_departamentos);
        $template->render();
    }

    function load_update($id) {


        $template = $this->loadView($this->data['controller'] . '/load_update');
        $template->set('controlador', $this->data['controller']);
        $template->render();
    }

}
?>

