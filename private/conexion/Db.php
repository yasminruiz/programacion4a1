<?php

class Conexion{//todo
    private $conexion='', $result='';

    public function Conexion($server, $user, $pass, $db){
        $this->conexion = mysqli_connect($server,$user,$pass,$db) or die('NO pude conectarme al servidor de conexion');
    }
    public function consultas($sql=''){
        $this->result = mysqli_query($this->conexion,$sql) or die(mysqli_error($this->conexion));
    }
    public function obtener_datos(){
        return $this->result->fetch_all(MYSQLI_ASSOC);
    }
    public function respuesta(){
        return $this->result;
    }
}
?>
