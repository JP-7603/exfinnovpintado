<?php

class juegos_model extends Model {

    public function get() {
        return $this->getAll('juegos');
    }

    public function add($_post) {
        return $this->Insertar('juegos', $_post);
    }

}

?>
