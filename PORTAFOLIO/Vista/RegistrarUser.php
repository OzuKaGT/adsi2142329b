<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/Style.css">
    <title> Andres Amazo </title>
</head>
<body>
    <header>
        <h1> Andres Amazo </h1>
        <h3> Developer Portfolio </h3>
        <nav>
            <ul>
                <li> Acerca de mi </li>
                <li> Manuales </li>
                <li> Proyectos en JS </li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <form action="" method='POST'>
                <legend> Nombres </legend>
                <input type="text" name="name" placeholder="Nombres" required><br><br>
                <legend> Apellidos </legend>
                <input type="text" name="lname" placeholder="Apellidos" required><br><br>
                <legend> Tipo de Documento </legend>
                <select name="tdocumento" required>
                    <option value="">------Seleccione------</option>
                    <option value="CC"> Cedula de Ciudadania </option>
                    <option value="TI"> Tarjeta de Identidad </option>
                    <option value="CE"> Cedula de Extrangeria </option>
                    <option value="Pass"> Pasaporte </option>
                </select><br><br>
                <legend> Numero de Documento </legend>
                <input type="text" name="doc" placeholder="Numero de Documento" required><br><br>
                <legend> Correo Electronico </legend>
                <input type="text" name="email" placeholder="Correo Electronico" required><br><br>
                <input type="submit" value="Registrar">
            </form>
        </section>
    </main>
</body>
</html>