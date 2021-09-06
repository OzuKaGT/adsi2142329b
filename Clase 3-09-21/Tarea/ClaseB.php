<?php 
    class Biblioteca{

        private $nombreB;

        //metodos

        public function __constructor($nombreB){
            $this->nombreB=$nombreB;
        }

        public function setNombreB($nombreB){
            $this->nombreB=$nombreB;
        }

        public function getNombreB(){
            return $this->nombreB;
        }
    }
?>