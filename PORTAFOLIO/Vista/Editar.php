<?php 

include '../Controlador/DatosController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="Imagenes/passion.png" type="image/x-icon">
    <link rel="stylesheet" href="Css/Style.css">
    <title> OzuKa Develop </title>
</head>
<body class="container-expand-xl">
    <div class="container-xxl fw-bolder contenedor__navegador" data-aos="fade-up">
    <nav class="topnav navbar navbar-expand-xl navbar-light fixed-top bg-light0 navbar-light shadow-sm scrollednav py-2 navegador">
  <div class="container-xl">
  <a class="navbar-brand navegador__imagenboton" href="Index.html">
      <img src="Imagenes/Passione.png" alt="" width="50" height="40" class="d-inline-block align-text-top">
      OzuKa Develop
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse opciones__nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Index.html">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            Trabajos JS
          </a>
          <ul class="dropdown-menu opciones__nav--desplegable" aria-labelledby="navbarDropdown"> 
            <li><a class="dropdown-item opciones__nav--desplegable" href="FuncionFlecha.html">Funciones de Flecha</a></li>
            <li><a class="dropdown-item opciones__nav--desplegable" href="Herencia.html">Herencias</a></li>
            <li><a class="dropdown-item opciones__nav--desplegable" href="POO.html">POO</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            Manuales
          </a>
          <ul class="dropdown-menu opciones__nav--desplegable" aria-labelledby="navbarDropdown"> 
            <li><a class="dropdown-item opciones__nav--desplegable" href="ManualUsuario.html">Manual de Usuario</a></li>
            <li><a class="dropdown-item opciones__nav--desplegable" href="ManualTecnico.html">Manual Tecnico  </a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" action="Buscar.php" method="POST">
        <button class="btn btn-outline-success boton__nav" type="submit" name="botonBuscar">Mostrar Peticiones</button>
      </form>
    </div>
  </div>
</nav>
    </div>
<main>
<br><br><br><br>
<div class="row">
        <div class="cols-4 float-start contenedor__editar">
        <h1 class="display-4"> Editar Peticion </h1>
          <form action="../Controlador/EditarController.php" method="POST">
            <div class="mb-3">
              <label class="form-label"><strong> Nombres </strong></label>
              <input type="text" name="nombres2" class="form-control" placeholder="nombres" style="border: solid darkgray;" value="<?php echo $resultado->Nombres ?>">
            </div>
            <div class="mb-3">
              <label class="form-label"><strong> Apellidos </strong></label>
              <input type="text" name="apellidos2" class="form-control" placeholder="apellidos" style="border: solid darkgray;" value="<?php echo $resultado->Apellidos ?>">
            </div>
            <input type="hidden" name="oculto">
            <input type="hidden" name="idSoli" value="<?php echo $resultado->IdSoli ?>">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"><strong>Correo Electronico</strong></label>
              <input type="email" name="correo2" class="form-control" aria-describedby="emailHelp" placeholder="correo electronico" style="border: solid darkgray;"  value="<?php echo $resultado->Correo ?>">
              <div id="emailHelp" class="form-text"> <strong>No compartas tu correo con nadie. </strong></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"><strong>Peticion</strong></label>
              <input type="text" class="form-control" name="petic2"  style="border: solid darkgray;height: 150px;"  value="<?php echo $resultado->Peticion ?>">
            </div>
            <input type="submit" name="enviar" value="Editar" class="btn btn-primary">
          </form>
          </div>
          <br>
        </div>
    </main>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
      <div class="container-fluid text-black h-120 text-center contenedor__footer"><br><br>
      <p class="footer"> ?? Hecho Por <strong> OzuKa </strong>. 2021. </p>
      </div>
    </footer>
</body>
</html>