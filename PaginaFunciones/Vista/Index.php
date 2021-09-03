<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Estilo.css">
    <title> Formulario tema 1 </title>
</head>
<body>
    <form action="../Controlador/Operaciones.php" method="post">
        <div class="DivisorF">
            <h2 id="TituloG"> Formulario Operaciones Matematicas </h2>
            <legend id="Subtitulo"> Ingrese los digitos que quiere que sean arrojados aleatoriamente </legend><br><br>
            <input type="text" name="Digitos" class="Cajas" placeholder="Numero de Digitos" required><br><br>
            <input type="submit" class="Boton" name="suma" value="Sumar">
            <input type="submit" class="Boton" name="maximo" value="Maximo">
            <input type="submit" class="Boton" name="minimo" value="Minimo">
            <input type="submit" class="Boton" name="media" value="Media">
        </div>
    </form>
</body>
</html>