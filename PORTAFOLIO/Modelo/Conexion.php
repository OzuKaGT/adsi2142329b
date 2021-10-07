<?php 
$dsn='mysql:host=localhost;dbname=portafolio';
$user='root';
$psw='';
$conexion='a';

try {
    $conexion=new PDO($dsn, $user, $psw);
    $statement=$conexion->prepare("SELECT * FROM usuario ORDER BY Nombres ");
    $statement->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
}
foreach ($statement as $key) {
    echo 'Nombres: '.$key['Nombres'].'<br>';
    echo 'Apellidos: '.$key['Apellidos'].'<br>';
    echo 'Telefono: '.$key['Telefono'].'<br>';
    echo 'CorreoElectronico: '.$key['CorreoElectronico'].'<br>';
    echo 'Contraseña: '.$key['Contraseña'].'<br><br><br>';
}






?>