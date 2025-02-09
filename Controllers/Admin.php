<?php
class Admin extends Controller
{
    public function __construct() {
        session_start();
        parent::__construct();
    }

    public function Index() {
        if (!isset($_SESSION['id'])) {
            header('Location: /asesinosseriales/admin/login');
            exit();
        } else {
            $data['title'] = 'Dashboard';
            $this->views->getView('admin', 'index', $data);
        }
    }

    public function login() {
        // Si la sesión está activa, redirigir al dashboard.
        

        if (isset($_SESSION['id'])) {
            header('Location: /asesinosseriales/admin');
            exit();
        } else {
            $data['title'] = 'Login';
            $data['js'] = 'login';
            $this->views->getView('admin', 'login',$data);
        }
    }

    public function logout() {
        // Destruir todas las variables de sesión
        $_SESSION = array();
    
        // Si se usaron cookies de sesión, destruir la cookie
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
        }
    
        // Finalmente, destruir la sesión
        session_destroy();
    
        // Redirigir al usuario a la página de login
        header('Location: /asesinosseriales/admin/index');
        exit();
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
        $this->verificarSesion();
        $data['asesinos'] = $this->model->getAsesinos();
        $data['js'] = 'verAsesinos';
        $data['title'] = 'Coleccion de Asesinos Seriales';
        $this->views->getView('admin','verAsesinos',$data);
    }

    public function verAsesino($id) {
        $this->verificarSesion();
        $data['asesino'] = $this->model->getAsesino($id);
        $data['js'] = 'verAsesino';
        $data['title'] = 'Informacion: '.$data['asesino']['alias'];
        $this->views->getView('admin','verAsesino',$data);
    }

    public function ingresarAsesino() {
        $this->verificarSesion();
        $data['js'] = 'ingresarAsesino';
        $data['title'] = 'Ingresar Nuevo Asesino';
        $this->views->getView('admin','ingresarAsesino',$data);
    }

    public function nuevoAsesino() {
        $this->verificarSesion();
        $datos =$_POST;
        $res=$this->model->guardarAsesino($datos);
        //$data = array("resultado"=>$res);
        $data['resultado'] = $res;
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
         die();
    }
    public function actualizarAsesino($id) {
        $this->verificarSesion();
        $datos =$_POST;
        $res=$this->model->actualizarAsesino($id,$datos);
        $data = array("resultado"=>$res);
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
        die();
    }

    public function editarAsesino($id) {
        $this->verificarSesion();
        $data['asesino'] = $this->model->getAsesino($id);
        $data['title'] = 'Editar Asesino: '.$data['asesino']['alias'];
        $data['js'] = 'editarAsesino';
        $this->views->getView('admin','editarAsesino',$data);
    }

    public function deleteAsesino($id) {
        $this->verificarSesion();
        $this->model->eliminarAsesino($id);
        $this->verAsesinos();
    }

    private function verificarSesion() {
        if (!isset($_SESSION['id'])) {
            header('Location: /asesinosseriales/admin/login');
            exit();
        }
    }
   
    

}
