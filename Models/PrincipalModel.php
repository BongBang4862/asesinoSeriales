<?php
class PrincipalModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getAsesinos()
    {
        $sql = 'SELECT id,nombre,alias,imagen_url FROM asesinos_seriales';
        $res = $this->selectAll($sql);
        return $res;
    }

    public function getAsesino($id)
    {
        $sql = 'SELECT * FROM asesinos_seriales WHERE id = ' . $id;
        $res = $this->select($sql);
        return $res;
    }

    public function buscarAsesinos($detalle)
    {
        // Asegúrate de que $detalle esté correctamente escapado para prevenir inyecciones SQL
        $sql = "SELECT * FROM asesinos_seriales WHERE nombre LIKE '%" . $detalle . "%' ";

        // Usamos una consulta preparada para evitar inyecciones SQL
        $res = $this->selectAll($sql);

        return $res;
    }
    public function buscarAsesinosSeleccion($detalle)
    {
        // Asegúrate de que $detalle esté correctamente escapado para prevenir inyecciones SQL
        $sql = "SELECT * FROM asesinos_seriales WHERE nombre LIKE '%" . $detalle . "%' ";

        // Usamos una consulta preparada para evitar inyecciones SQL
        $res = $this->selectAll($sql);

        return $res;
    }
}
