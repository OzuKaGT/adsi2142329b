<?php

include ('ClaseB.php');

    class Materiales{
        private $tipoMaterial;
        private $codigo;
        private $autor;
        private $titulo;
        private $año;
        private $status;

        public function __construct($tipoMaterial, $codigo, $autor, $titulo, $año, $status){
            $this->tipoMaterial=$tipoMaterial;
            $this->codigo=$codigo;
            $this->autor=$autor;
            $this->titulo=$titulo;
            $this->año=$año;
            $this->status=$status;
        }

        public function setterM($atributo, $valor){
            $this->$atributo=$valor;
        }

        public function getterM($atributo){
            return $this->$atributo;
        }

        public function Mostrarclase(){
            echo "<p style='font-size: 22px'> El nombre del libro es <b>".$this->titulo. "</b>. <br> Fué escrito por el autor <b>".$this->autor. "</b>. <br> El genero al que pertenece este libro es <b>".$this->tipoMaterial. "</b>.  <br> Se publicó en el año <b>".$this->año. "</b>.  <br> Su codigo para la compra es <b>".$this->codigo. "</b>. <br> Se encuentra en estado <b>".$this->status."</b></p>.";
        }
    }

    //herencia desde materiales

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
            echo "<p style='font-size: 20px'>Fue distribuido por la editorial <b>".$this->editorial."</b>.</p>";
        }
    }

    //herencia desde materiales

    class Revista extends Materiales{
    
        public function __construct($editorial, $tipoMaterial, $codigo, $autor, $titulo, $año, $status){
            parent::__construct($tipoMaterial, $codigo, $autor, $titulo, $año, $status);
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