<?php

// aquí hago la consulta a la BBDD y obtengo los campos y los meto dentro de variables y los añado en donde corresponda dentro del contenido

// 1) CONEXIÓN CON BBDD (HOST, USER, PASS, NOMBRE DE BBDD)
$con = mysqli_connect($_ENV['BBDD_HOST'], $_ENV['BBDD_USER'], $_ENV['BBDD_PASS'], $_ENV['BBDD_BBDD']);
$con->set_charset("utf8mb4");


// 2) CONSULTA SQL A LA BBDD
$sql = "SELECT * FROM `productos` WHERE ruta = '$url'";


// Obtengo el resultado de todas las filas que me de la consulta
$resultado = mysqli_query($con, $sql);

// 3) COMPROBAMOS EL RESULTADO
// PRIMERO VER QUE NOS DEVUELVA AL MENOS 1 FILA DENTRO DE $RESULTADO
if(mysqli_num_rows($resultado) == 1){
    // procedo a recoger los datos
    // 4) recoger los datos y meter en variables mediante una iteración que va a recorrer el array de $resultado
    while($fila = mysqli_fetch_array(($resultado))){
        // En $fila ya tengo todos los campos de cada registro. En cada vuelta de este iterador tengo dentro de $fila un registro diferente. En este caso particular $resultado solo tiene un item, por lo que el iterador recorrerá 1 vez $resultado y en $fila tendré los valores de todos los campos de este registro.

        // 5) VARIABILIZAR
        $title = $fila['title'];
        $description = $fila['description'];
        $h1 = $fila['h1'];
        $parrafo1 = $fila['parrafo1'];
        $srcImg1 = $fila['srcImg1'];
        $altImg1 = $fila['altImg1'];
        $titleImg1 = $fila['titleImg1'];
    }

}else{
    // que no ha encotrado ningun registro o hay más de 1, por lo que debemos dar fallo.
    // header location al index (redirección 301)
}

?>


<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/producto.min.css">

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA'].'/'.$url?>">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include './php/includes/eu/metadatos_globales.php'
    ?>

</head>
<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include './php/includes/eu/body_global.php'
    ?>

    <!-- NAV -->
    <?php include './php/includes/eu/nav.php' ?>

    <h1><?=$h1?></h1>


    <p><?=$parrafo1?></p>

    <img src="<?=$_ENV['RUTA']?><?=$srcImg1?>" alt="<?=$altImg1?>X" title="<?=$titleImg1?>">


    <!-- FOOTER -->
    <?php include './php/includes/eu/footer.php'?>
</body>
</html>