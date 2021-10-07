<?php 

$pass= '';
$user='root';
$nombredb='portafolio';

try {
    $db= new PDO(
        'mysql:host=localhost;dbname='.$nombredb,
        $user,
        $pass
    );
} catch (Exception $e) {
    echo 'Error de conexion'.$e->getMessage();
}

?>