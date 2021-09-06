<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <section>
        <center>
            <h1 style="font-size:30px;"> Biblioteca "Como dice el dicho" </h1>
            <h1 style="font-size:30px;"> LIBROS </h1>
            <?php
            
                include_once ('ClaseM.php');
                
                //objeto1

                $bi=new Biblioteca('Como dice el dicho');

                $mat=new Materiales('Fantasia', '11221', 'Pedro Pedraza', 'La espada llameante', '2012', 'Activo');

                $li=new Libro('Lorito', 'Fantasia', '11221', 'Pedro Pedraza', 'La espada llameante', '2012', 'Activo');

                //objeto2

                $bi2=new Biblioteca('Como dice el dicho');

                $mat2=new Materiales('Accion', '154521', 'Pablo Salsa', 'Robocopo23000', '2015', 'Activo');

                $li2=new Libro('Leon', 'Fantasia', '11221', 'Pedro Pedraza', 'La espada llameante', '2012', 'Activo');

                //objeto3
                
                $bi3=new Biblioteca('Como dice el dicho');

                $mat3=new Materiales('Romance', '22584', 'Jacinta Rosales', 'Antes de morir', '2009', 'Retirado');

                $li3=new Libro('Lobo', 'Romance', '22584', 'Jacinta Rosales', 'Antes de morir', '2009', 'Retirado');

                //Mostrar objeto 1

                echo "<br>";
                $mat->Mostrarclase();
                echo ('<img src="Imagenes/Espada.jpg" style="width:300px; height:260px">');
                $li->MostrarLibro();
                echo "<br>";

                //Mostrar objeto 2

                echo "<br>";
                $mat2->Mostrarclase();
                echo ('<img src="Imagenes/Robocopo.jpg" style="width:300px; height:260px">');
                $li2->MostrarLibro();
                echo "<br>";
                
                //Mostrar objeto 3

                echo "<br>";
                $mat3->Mostrarclase();
                echo ('<img src="Imagenes/Romance.jpg" style="width:300px; height:260px">');
                $li3->MostrarLibro();
                echo "<br>";

            ?>
        <form action="InicioRevistas.php">
            <input type="submit" value="Ver revistas">
        </form>
        </center>
    </section>
</body>
</html>