<?php
class PrincipalModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuario($email) {
        return $this->select("SELECT * FROM usuarios WHERE correo = '$email' AND estado = 1");
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