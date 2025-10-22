<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacta con nosotros</title>
    <meta name="description" content="Página de contacto de nuestra panadería en Aginaga">
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/contacto.min.css">

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/contacto">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include './php/includes/es/metadatos_globales.php'
    ?>

</head>

<body>
    <?php
    // Elementos globales dentro del body: script de tag manager
    include './php/includes/es/body_global.php'
    ?>


    <!-- NAV -->
    <?php include './php/includes/es/nav.php' ?>

    <!-- HERO01 -->
    <header>
        <h1>Estamos cerca de ti</h1>
        <div>            
            <img rel="preload" fetchpriority="high" src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>        
    </header>    

    <main>
        <section>

            <div class="h2Especial">
                <span></span>
                <h2>Contacta</h2>
            </div>

            
            <!-- artForm -->
            <article class="artForm">
                <h3>Formulario de contacto</h3>

                <!-- Al abrir este otro archivo, genero otro scope, se reseta y limpia la memoria en el servidor -->
                <form action="/php/app/gestionForm.php" method="post">

                    <?php
                    if( isset($_GET['campo']) ){
                        // si entro es que viene un error marcado en la url con query string
                        $campo = $_GET['campo'];
                        $error = $_GET['error'];
                        $nombre = $_GET['nombre'];
                        $tel = $_GET['tel'];
                        $email = $_GET['email'];
                        $mensaje = $_GET['mensaje'];
                        // echo "<p class='error'>Hay un error en el campo $campo de tipo $error</p>";
                    }
                    ?>

                    <span class="error"><?php if( isset($campo) && $campo == "nombre"){echo "Hay un error en el campo $campo de tipo $error";} ?></span>
                    <label for="nombre">Nombre *</label>
                    <!-- <input type="text" name="nombre" id="nombre" placeholder="* Escribe tu nombre" minlength="3" maxlength="40" required > -->
                    <input type="text" class='<?php if(isset($campo) && $campo == "nombre"){ echo "inputError";} ?>' name="nombre" id="nombre" placeholder="* Escribe tu nombre" value="<?php if(isset($nombre)){echo $nombre;}?>">

                    <span class="error"><?php if( isset($campo) && $campo == "telefono"){echo "Hay un error en el campo $campo de tipo $error";} ?></span>
                    <label for="tel">Teléfono</label>
                    <input type="tel" class='<?php if(isset($campo) && $campo == "telefono"){ echo "inputError";} ?>' name="tel" id="tel" placeholder="Aquí tu teléfono" value="<?php if(isset($tel)){echo $tel;}?>">

                    
                    <span class="error"><?php if( isset($campo) && $campo == "email"){echo "Hay un error en el campo $campo de tipo $error";} ?></span>
                    <label for="email">Email *</label>
                    <input type="email" class='<?php if(isset($campo) && $campo == "email"){ echo "inputError";} ?>' name="email" id="email" placeholder="* Correo electrónico" value="<?php if(isset($email)){echo $email;}?>">


                    <span class="error"><?php if( isset($campo) && $campo == "mensaje"){echo "Hay un error en el campo $campo de tipo $error";} ?></span>
                    <label for="mensaje">Comentarios</label>
                    <textarea name="mensaje" class='<?php if(isset($campo) && $campo == "mensaje"){ echo "inputError";} ?>' id="mensaje" placeholder="Escribe aquí tu mensaje"><?php if(isset($mensaje)){echo $mensaje;}?></textarea>

                    <span class="error"><?php if( isset($campo) && $campo == "terminos"){echo "Para poder enviar una consulta, debes aceptar los términos";} ?></span>
                    <div>
                        <input type="checkbox" name="terminos" id="aceptarTerminos">                        
                        <labelfor="aceptarTerminos">Aceptar <a href="<?=$_ENV['RUTA']?>/es/terminos-legales">términos y condiciones de privacidad</a></label>
                    </div>

                    <!-- inpout oculto donde el value es el valor de $lang, ergo el idioma -->
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">
                    <!-- otro input oculta -->
                    <input type="text" name="inputUrl" value="<?= $url?>" style="display:none;">
                    

                    <input type="submit" value="ENVIAR" class="boton">

                    <p>* Campos obligatorios</p>

                </form>

            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include './php/includes/es/footer.php'?>
</body>


</html>