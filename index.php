<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form method="post">
    <label for="nombre">Nombre: </label>    
    <input type="text" name="nombre">
    <label for="nombre">Apellido: </label>    
    <input type="text" name="apellido">
    <label  for="cedula">Cedula: </label>    
    <input type="number" name="cedula">
    <label for="celular">Celular: </label>    
    <input type="text" name="celular">
    <input type="submit" name="boton" value="ingresar">
    </form>
    <h1>
        Alumno
    </h1>
    <?php
        if(isset($_POST["boton"])){
            $nombre = $_POST["nombre"];
        }
    ?>
</body>
</html>