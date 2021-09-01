<?php 

class Conx extends mysqli{

    private $server='localhost';
    private $user='root';
    private $pass='';
    private $bd='persona_prueba1';


    public function __construct(){
        parent::__construct($this->server, $this->user, $this->pass, $this->bd);
        $this->connect_errno ? die('Error en la conexion... '.mysqli_connect_error()) : $r="Conexion exitosa";
    }

}
?>