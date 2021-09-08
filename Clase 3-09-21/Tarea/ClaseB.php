<?php 

    include_once ('InicioLibros.php');

    include_once ('InicioRevistas.php');

    class Biblioteca{

        protected $coleccion;

        //metodos

        function __construct(){
            $this->coleccion=array();
        }   

        function adicionar($material){
            array_push($this->coleccion, $material);
        }

        function verMaterialesL(){
            for ($i=0; $i < count($this->coleccion) ; $i++) { 
                echo $this->coleccion[$i]->Mostrarclase();
                echo $this->coleccion[$i]->MostrarLibro();
            }
        }
        
        function verMaterialesR(){
            for ($i=0; $i < count($this->coleccion) ; $i++) { 
                echo $this->coleccion[$i]->MostrarRevista();
            }
        }
    }

//AGREGAR LIBRO

$biblio=new Biblioteca();
$li3=new Libro('Tigre', 'Miedo', '66666', 'Rosario Gomez', 'El terror latente', '2018', 'Activo');

echo "<h1> SECCION DE LIBROS </h2>";

$biblio->adicionar($li);
$biblio->adicionar($li3);

$biblio->verMaterialesL();

//AGREGAR REVISTA

$biblio2=new Biblioteca();
$re3=new Revista('Cocina', '25968474', 'Carlos Ricardo B', '1001 formas de hacer pasta', '2020', 'Activo');

echo "<h1> SECCION DE REVISTAS </h2>";

$biblio2->adicionar($re);
$biblio2->adicionar($re3);

$biblio2->verMaterialesR();
?>