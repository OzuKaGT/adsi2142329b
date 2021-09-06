<?php 

include_once ('ClaseM.php');

class Libro extends Materiales{
    private $editorial;

    public function __construct($editorial, $tipoMaterial, $codigo, $autor, $titulo, $año, $status){
        parent::__construct($tipoMaterial, $codigo, $autor, $titulo, $año, $status);
        $this->editorial=$editorial;
    }

    public function setterL($atributo, $valor){
        $this->$atributo=$valor;
    }

    public function getterL($atributo){
        return $this->$atributo;
    }

    public function MostrarLibro(){
        echo "El nombre del libro es ".$this->titulo. ". Fué escrito por el autor ".$this->autor. "y posteriormente distribuido por la editorial ".$this->editorial. 
        "El genero al que pertenece este libro es ".$this->tipoMaterial. " se publicó en el año ".$this->año. "su codigo para la compra es ".$this->codigo. " y en esta en estado ".$this->status." ";
    }
}
?>