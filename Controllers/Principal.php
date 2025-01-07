<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function Index() {
        $data['title']='Iniciar Sesion';
        $this->views->getView('principal','index',$data);
    }

    
}
