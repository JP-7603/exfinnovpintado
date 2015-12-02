<?php

class clientes_model extends Model {

    public function get() {
        return $this->getAll('juegos');
    }

    public function get_id($id) {
        
        return $this->getOne('juegos', array('id' => $id));
    }

    public function add($_post) {
        return $this->Insertar('juegos', $_post);
    }

    public function update($_post, $id) {
        return $this->Update('juegos', $_post, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->Update('juegos', array('status'=>'99'), array('id'=>$id));
    }
}

?>
