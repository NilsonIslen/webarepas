<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Stl.css" rel="stylesheet" type="text/css"> 
    <title> Arepas El Grano Dorado </title>
</head>
<body>

<div>
<div id="logo">
<p id="PLogo"> AGD </p>
</div>

<h1> Arepas El Grano Dorado </h1>

</div>



<p> Fabrica y distribucion de arepas de maiz en Manizales (Caldas) </p>

<p> Carrera 30a # 50a - 65 Barrio Eucaliptus </p>

<p> Telefono: 3137323834 </p>

<h2> Contacto </h2>
<?php

if(isset($_POST['Contacto'])){

    $Nombre = $_POST['Nombre'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];
    $Mensaje = $_POST['Mensaje'];

    $To = "arepaselgranodorado@gmail.com, nilislen@gmail.com";
    $Asunto =  "Contacto desde elgranodorado.com";
    $Contenido = " Nombre: $Nombre\n Direccion: $Direccion \n Telefono:$Telefono \n Mensaje: $Mensaje \n";

    mail($To, $Asunto, $Contenido);

    echo "<h3> Gracias por tu interes, pronto nos comunicaremos contigo  </h3>";
}

?>
<form method="post" action="index.php">
    <input type="text" name="Nombre" placeholder="Nombre" required>
    <input type="text" name="Direccion" placeholder="Direccion" required>
    <input type="text" name="Telefono" placeholder="Telefono" required>
    <input type="textarea" name="Mensaje" placeholder="Escriba aqui su mensaje" required>
    <button type="submit" name="Contacto"> Enviar </button>
</form>


    
</body>
</html>