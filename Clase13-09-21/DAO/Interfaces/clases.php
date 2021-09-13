<?php

include ('animal.php');

class Aves extends Animal implements locomocion{

    public $pico;
    public $pata;

    public function __construct($nombre, $clase, $pico, $pata){
        parent::__construct($nombre, $clase);
        $this->pico=$pico;
        $this->pata=$pata;
    }

    public function movimiento(){
        echo $this->nombre.' Vuela y se mueve por su pata '.$this->pata;
    }
    
    public function emitirSonido($sonido){
        echo $this->nombre.' Produce sonido por su pico '.$this->pico;
    }
}

class Pez extends Animal implements locomocion{

    public $familia;
    public $habitat;

    public function __construct($nombre, $clase, $familia, $habitat){
        parent::__construct($nombre, $clase);
        $this->familia=$familia;
        $this->habitat=$habitat;
    }
    
    public function movimiento(){
        echo 'El movimiento caracteristico de los peces de la familia '.$this->familia;
    }
    
    public function emitirSonido($sonido){}
}

$tiburon=new Pez('Tiburon','Pez','Cartilaginosos','Oceano');
$paloma=new Aves('Paloma','Ave','Delgado','Anisodáctilas');

$tiburon->movimiento();
echo "<br>";
echo "<br>";
$paloma->movimiento();
echo "<br>";
$paloma->emitirSonido('Gorjeo');


?>