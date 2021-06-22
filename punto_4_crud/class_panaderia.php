<?php
require_once "class_conexion.php";
//CREA TU CLASE PANADERIA

class Panaderia extends Conexion_pp {
    private $nombre_postre;
    private $existencias_postre;
    private $descripcion_postre;
    private $conexion_bd;

    function __construct()
    {
        $this->conexion_bd = new Conexion_pp();
        $this->conexion_bd = $this->conexion_bd->conexion_bases_datos();
    }

    function crear_postre($nombre, $exist, $descr)
    {
        $this->nombre_postre = $nombre;
        $this->existencias_postre = $exist;
        $this->descripcion_postre = $descr;
        

        $query = "INSERT INTO tb_panaderia (nombre, existencias, descripcion) VALUES (?,?,?)";
        $insert = $this->conexion_bd->prepare($query);
        $array_data_user = array(
            $this->nombre_postre,
            $this->existencias_postre,
            $this->descripcion_postre
        );
        $insert->execute($array_data_user);
        $id_user_last = $this->conexion_bd->lastInsertId();
        return $id_user_last;
    }
}