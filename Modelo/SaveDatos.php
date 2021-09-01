<?php 

include_once('Conexion.php');

class Personas{

    private $name;
    private $doc;
    private $mail;

public function __construct($name, $doc, $mail){

    $this->name=$name;
    $this->doc=$doc;
    $this->mail=$mail;
}

public function getName($name){
    $this->name=$name;
} 

public function setName($name){
    return($this->name);
}

public function getDoc($doc){
    $this->doc=$doc;
} 

public function setDoc($doc){
    return($this->doc);
}

public function getMail($Mail){
    $this->mail=$mail;
} 

public function setMail($mail){
    return($this->mail);
}

public function Verificar(){

    $x=new Conx();
    $registro="CALL AddPersona( '$this->name', '$this->doc', '$this->mail')";

    $x->query($registro);
        if($x==TRUE){
            echo "<meta http-equiv='refresh' content='4; url=../Vista/Index.php'>";
            echo "La persona fue registrada correctamente... Redirigiendo en 4 segundos";
        }else {
            echo "La persona no se registro .... Revise ";
        }

}
}
?> 