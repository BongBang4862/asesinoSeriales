<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function Index() {
        $data['title']='Iniciar Sesion';
        $data['asesinos'] = $this->model->getAsesinos();
        $this->views->getView('principal','index',$data);
    }

    public function ver($id) {
        $data['asesino'] = $this->model->getAsesino($id);
        $this->views->getView('main','ver',$data);
    }

    
}
