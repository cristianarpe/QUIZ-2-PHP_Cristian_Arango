<?php
//EN ESTE ARCHIVO VA TU CLASE

class Nombre {
    public $user_name;
    public $user_apellido;
    public $resultado;

    function __construct($nombre, $apellido)
    {
        $this->user_name = $nombre;
        $this->user_apellido = $apellido;
    }

    function validacion(){
        //$this->resultado = $this->user_name." ".$this->user_apellido;
        if (empty($this->user_name)) {
            echo '
                <div class="alert alert-danger" role="alert">
                LLENE TODOS LOS CAMPOS
                </div>
                ';
            return;
        } elseif (empty($this->user_apellido)) {
            echo '
            <div class="alert alert-danger" role="alert">
            LLENE TODOS LOS CAMPOS
            </div>';
            return;
        } else {
            $this->resultado = $this->user_name." ".$this->user_apellido;
            return $this->resultado;
            return;
        }
        
        
    
}
}
