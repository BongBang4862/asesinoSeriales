<?php
class Admin extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function Index() {
        $data['title']='Dashboard';
        $this->views->getView('admin','index',$data);
    }
    
    public function Validar() {
        $email = $_POST['username'];
        $password = $_POST['password'];
 
        $data = $this->model->getUsuario($email);
 
        if (!empty($data)) {
         if (password_verify($password,$data['clave'])) { 
             $_SESSION['id']= $data['id'];
             $_SESSION['correo']= $data['correo'];
             $res = array('tipo'=> 'success','mensaje' => 'Bienvenido');
 
         }else{
             $res = array('tipo'=> 'warning','mensaje' => 'Contraseña Incorrecta');
         }
      }else{
         $res = array('tipo'=> 'warning','mensaje' => 'No existe  Incorrecta');
 
     }
 
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
        die();
        
     }

     public function verAsesinos() {
        $data['asesinos'] = $this->model->getAsesinos();
        $this->views->getView('admin','verAsesinos',$data);
    }

    public function verAsesino($id) {
        $data['asesino'] = $this->model->getAsesino($id);
        $this->views->getView('admin','verAsesino',$data);
    }

    public function ingresarAsesino() {
        $this->views->getView('admin','ingresarAsesino');
    }

    public function nuevoAsesino() {
        $datos =$_POST;
        $res=$this->model->guardarAsesino($datos);
        $data = array("resultado"=>$res);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
         die();
    }

    public function editarAsesino($id) {
        $data['asesino'] = $this->model->getAsesinos($id);
        $this->views->getView('admin','editarAsesino',$data);
    }
   

}
