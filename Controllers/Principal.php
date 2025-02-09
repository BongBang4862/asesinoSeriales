<?php
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $data['title'] = 'Colección de Asesinos Seriales';
        $data['asesinos'] = $this->model->getAsesinos();
        $data['js'] = 'principal/index';
        $this->views->getView('principal', 'index', $data);
    }

    public function ver($id)
    {
        $data['asesino'] = $this->model->getAsesino($id);
        $data['title'] = $data['asesino']['alias'];
        $data['js'] = 'principal/ver';
        $this->views->getView('main', 'ver', $data);
    }

    public function buscar($detalle)
    {
        $data['asesinos'] = $this->model->buscarAsesinos($detalle);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function buscarSeleccion($detalle)
    {
        $detalle = urldecode($detalle); // Decodificar espacios y otros caracteres
        $detalle = trim($detalle); 
        $data['asesinos'] = $this->model->buscarAsesinosSeleccion($detalle);
        $data['title'] = 'Buscar Asesinos Seriales';
        $data['js'] = 'principal/index';
        $this->views->getView('principal', 'index', $data);
    }
}
