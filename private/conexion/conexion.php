<?php
class conexion{
    private $conexion='', $result='';
    public function Conexion($_SERVER,$user,$pass,$conexion){
        $this->Conexion = mysqli_connect($_SERVER,$user,$pass,$db) or
        die('No puede conectrse al servidor');
    }
    public function consultas($sql=''){
        $this->resultado = mysqli_query($this->Conexion, $sql) or die
        (mysqli_error($this->Conexion));
    }
            public function obtener_datos(){
                return $this->resltado->fetch_all(MYSQLI_ASSOC);
            }
            public function respuesta(){
                return $this->resultado;
            }
        
    
}

