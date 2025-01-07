<?php
class PrincipalModel extends Query{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuario($email) {
        return $this->select("SELECT * FROM usuarios WHERE correo = '$email' AND estado = 1");
    }
}

?>