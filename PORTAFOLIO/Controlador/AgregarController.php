<?php 

if (!isset($_POST['oculto'])){
    exit();
}

include ('../Modelo/Conexion.php');
$names= $_POST['nombres'];
$lnames= $_POST['apellidos'];
$mail= $_POST['correo'];
$pe= $_POST['petic'];

$sentencia= $db->prepare("CALL crear_solicitud (?,?,?,?)");
$resultado= $sentencia->execute([$names, $lnames, $mail, $pe]);

if ($resultado === True) {
    header ('Location: ../Vista/Index.html');
}else{
    echo 'Hubo un error en la insercion, Intente nuevamente';
}

?>