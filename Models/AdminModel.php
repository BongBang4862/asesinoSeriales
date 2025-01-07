<?php
class AdminModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuario($email) {
        return $this->select("SELECT * FROM usuarios WHERE correo = '$email' AND estado = 1");
    }

    public function guardarAsesino($data) {
        $sql = 'INSERT INTO asesinos_seriales (nombre, alias, fecha_nacimiento, fecha_fallecimiento, nacionalidad, numero_victimas, metodo_operacion, biografia,imagen_url)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);'; 
        
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
            // Obtener detalles de la imagen
            $imagen = $_FILES['imagen']['tmp_name'];  
            $nombreImg = $_FILES['imagen']['name'];
            $tipoImg = strtolower(pathinfo($nombreImg, PATHINFO_EXTENSION));
            $sizeImg = $_FILES['imagen']['size'];
            
            // Establecer directorio de destino
            $directorio ="Assets/uploads/";  // Debe existir en el servidor
            
            // Comprobar si el directorio existe, si no, crearlo
            if (!file_exists($directorio)) {
                echo ($directorio . ' No existe eldirectorio'); // Crear directorio con permisos adecuados
            }
            
            // Validar tipo de imagen (puedes agregar más extensiones si es necesario)
            $tiposPermitidos = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($tipoImg, $tiposPermitidos)) {
                echo "El tipo de archivo no es permitido. Solo se permiten imágenes JPG, JPEG, PNG o GIF.";
                exit;
            }
            
            // Validar tamaño de la imagen (por ejemplo, 5MB como máximo)
            if ($sizeImg > 5 * 1024 * 1024) { // 5MB
                echo "El archivo es demasiado grande. El tamaño máximo permitido es 5MB.";
                exit;
            }
        
            // Generar un nombre único para evitar conflictos con archivos existentes
            $nombreNuevo = time() . "_" . basename($nombreImg); // Usa el timestamp para hacerlo único
            
            // Definir la ruta completa donde se guardará la imagen
            $rutaFinal = $directorio . $nombreNuevo;

            // Mover el archivo desde la ubicación temporal al directorio final
            if (move_uploaded_file($imagen, $rutaFinal)) {
            } else {
            }
        } else {
        }
        
        $datos = array($data['nombre'],$data['alias'],$data['fecha_nacimiento'],$data['fecha_fallecimiento'],$data['nacionalidad'],$data['numero_victimas'],$data['metodo_operacion'],$data['biografia'],$rutaFinal);
        $res = $this->save($sql,$datos);
        return $res;
    }

    public function getAsesinos() {
        $sql = 'SELECT * FROM asesinos_seriales';
        $res = $this->selectAll($sql);
        return $res;
    }
    public function getAsesino($id) {
        $sql = 'SELECT * FROM asesinos_seriales WHERE id = ' . $id;
        $res = $this->select($sql);
        return $res;
    }
}
?>