<?php 

//PDO=php data objects
//dsn= data source name
$dsn='mysql:host=localhost;dbname=adsi';
$user='root';
$psw='';
$conexion='a';

try {
    $conexion=new PDO($dsn, $user, $psw);
    $statement=$conexion->prepare("SELECT * FROM aprendiz ORDER BY Nombre ");
    $statement->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
}
foreach ($statement as $key) {
    echo 'Nombre: '.$key['Nombre'].'<br>';
    echo 'Documento: '.$key['Documento'].'<br>';
    echo 'Formacion: '.$key['Formacion'].'<br>';
    echo 'Sexo: '.$key['Genero'].'<br><br><br>';
}
echo "<br>----------------------------------------------------<br>";

$statement->execute();
while ($key=$statement->fetch()) {
    echo $key['Nombre'].'<br>';
}

echo "<br>----------------------------------------------------<br>";

$statement->execute();

$resultados=$statement->fetchAll();

foreach ($resultados as $key) {
    echo $key['Nombre'].'<br>';
    echo $key['Documento'].'<br>';
    echo $key['Formacion'].'<br>';
    echo $key['Genero'].'<br><br> ';
}

echo "<br>----------------------NUM--------------------------<br>";

$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_NUM)) {
    echo $key[0].'<br>';
}

echo "<br>----------------------ASOCIATIVO--------------------------<br>";

$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_ASSOC)) {
    echo $key['Nombre'].'<br>';
}

echo "<br>----------------------OBJETO--------------------------<br>";

$statement=$conexion->prepare("INSERT INTO aprendiz VALUES ('Andres','1000786497', 'ADSI', 'M')");

$statement->execute();
// while ($key=$statement->fetch(PDO::FETCH_OBJ)) {
//     echo $key->Nombre.'<br>';
//     echo $key->Documento.'<br><br>';
// }


//echo $resultados;

//var_dump($resultados);
// print_r($statement);
?>