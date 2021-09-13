<?php 

include ('animal.php');

class Robot implements locomocion{
    public $tipo;

    public function __construct($tipo){
        $this->tipo=$tipo;    
    }

    public function movimiento(){
        echo "Su movimiento es propio de los robots ".$this->tipo;
    }

    public function emitirSonido($sonido){
        echo "Los robots tipo ".$this->tipo. " emiten sonidos de ".$sonido;
    }
}

$r2d2=new Robot("Dron");

$r2d2->movimiento();
echo "<br>";
$r2d2->emitirSonido('Aspas de vuelo');

?>