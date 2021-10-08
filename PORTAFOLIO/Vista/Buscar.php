<?php 

include '../Controlador/BuscarController.php';

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
    <title> OzuKa Develop </title>
</head>
<body class="container-expand-xl">
    <div class="container-xxl fw-bolder" style="background-color:#ecb061;" data-aos="fade-up">
    <nav class="topnav navbar navbar-expand-xl navbar-light fixed-top bg-light0 navbar-light shadow-sm scrollednav py-2" style="background-color:#ecb061;font-size: 18px">
  <div class="container-xl">
  <a class="navbar-brand" href="Index.html" style="font-size: 22px;">
      <img src="Imagenes/Passione.png" alt="" width="50" height="40" class="d-inline-block align-text-top">
      OzuKa Develop
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/OzuKaGT/JavaScript">Trabajos JS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            Manuales
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:white;"> 
            <li><a class="dropdown-item" href="#" style="background-color:white;">Manual de Usuario</a></li>
            <li><a class="dropdown-item" href="#" style="background-color:white;">Manual de Sistema</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
      <button class="btn btn-outline-success" type="submit" name="botonBuscar" style="width: 120px;">Mostrar Peticiones</button>
      </form>
    </div>
  </div>
</nav>
    </div>
    <main>
    <div class="container pt-5 pb-5 mt-4 aos-init aos-animate" style="z-index: 2;text-align: center;font-size: 18px;font-family: 'Montserrat', sans-serif;width:100%; height: 700px" data-aos="fade-up"><br><br>
    <h1 class="display-4"> Peticiones </h1><br>
    <table class="table" style="table-layout: fixed;table-layout: auto !important;max-width:100%;">
      <thead>
        <tr>
          <th scope="col">#ID</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Correo Electronico</th>
          <th scope="col">Peticion</th>
          <th scope="col">Accion</th>
        </tr>
      </thead>
      <tbody> 
        <?php 
          foreach ($solicitudes as $dato) {
        ?>
        <tr>
          <th><?php echo $dato->IdSoli; ?></th>
          <td><?php echo $dato->Nombres; ?></td>
          <td><?php echo $dato->Apellidos; ?></td>
          <td><?php echo $dato->Correo; ?></td>
          <td style="max-width:500px;overflow:hidden;"><?php echo $dato->Peticion; ?></td>
          <td><a href="Editar.php?id=<?php echo $dato->IdSoli; ?>" class="btn btn-primary"> Editar </a> &nbsp&nbsp
            <a href="../Controlador/EliminarController.php?id=<?php echo $dato->IdSoli; ?>" class="btn btn-danger"> Eliminar </a></td>
        </tr>
        <?php 
          }
        ?>
      </tbody>
    </table>
    </div>
    </main>
    <footer>
      <div class="container-fluid text-black h-120 text-center" style="background-color: #ecb061; z-index: 2;text-align: left;font-size: 35px;font-family: 'Montserrat', sans-serif;height: 100px;"><br><br>
        <p style="font-size: 18px;margin-top: -60px;"> © Hecho Por <strong> OzuKa </strong>. 2021. </p>
      </div>
    </footer>
</body>
</html>