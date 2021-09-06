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
            <h1 style="font-size:30px;"> REVISTAS </h1>
            <?php
            
                include_once ('ClaseM.php');
                
                //objeto1

                $bi=new Biblioteca('Mundo Mujer');

                $mat=new Materiales('Cosmeticos', '15448785', 'Avon', 'Cosmeticos para el otoño', '2012', 'Retirado');

                $re=new Revista('Cosmeticos', '15448785', 'Avon', 'Cosmeticos para el otoño', '2012', 'Retirado');

                //objeto2

                $mat2=new Materiales('Productos hogar', '258697', 'Homecenter', 'Productos que necesites y quizas no sepas', '2020', 'Activo');

                $re2=new Revista('Productos hogar', '258697', 'Homecenter', 'Productos que necesites y quizas no sepas', '2020', 'Activo');

                //objeto3

                $mat3=new Materiales('Popular', '3148756', 'Vea', 'El famoso de la semana', '2021', 'Activo');

                $re3=new Revista('Popular', '3148756', 'Vea!', 'El famoso de la semana', '2021', 'Activo');

                //Mostrar objeto 1

                echo "<br>";
                $mat->Mostrarclase();
                echo ('<img src="Imagenes/avon-06.jpg" style="width:300px; height:260px">');
                //$re->MostrarRevista();
                echo "<br>";

                //Mostrar objeto 2

                echo "<br>";
                $mat2->Mostrarclase();
                echo ('<img src="Imagenes/Homecenter.png" style="width:300px; height:260px">');
                //$re2->MostrarRevista();
                echo "<br>";
                
                //Mostrar objeto 3

                echo "<br>";
                $mat3->Mostrarclase();
                echo ('<img src="Imagenes/Vea.jpg" style="width:300px; height:260px">');
                //$re3->MostrarRevista();
                echo "<br>";

            ?>
        <form action="InicioLibros.php">
            <br><br>
            <input type="submit" value="Ver Libros">
        </form>
        </center>
    </section>
</body>
</html>