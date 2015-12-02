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
        $template->render();
    }

    function action_add()
    {
        $_post = $_POST;
        $_result = $this->loadModel('juegos_model');
        $_item = $_result->add($_post);
        if ($_item) {
            exit(json_encode(array("status"=>TRUE,"mensaje"=>"Se registro en base de datos")));
        }else            
            exit(json_encode(array("status"=>FALSE,"mensaje"=>"Error al registrar")));
    
    }
}
?>

