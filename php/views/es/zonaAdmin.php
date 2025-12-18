<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Admin</title>
    <meta name="description" content="120 y 320 caracteres">
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/zonaAdmin.min.css">

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/zona-admin">
 
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
        <h1>Acceso Zona privada</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>

        <?php
        if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
            // MOSTRARÉ EL CONTENIDO PRIVADO
        ?>

            <h2>Hola, estás logeado <?= $_SESSION['NOMBRE'] ?></h2>
           
        <?php
        }else{
            // MOSTRARÉ EL FORMULARIO DE LOGEO
        ?>
            <article class="artForm">
                <form action="/php/app/gestionFormLogin.php" method="post">

                    <?php
                    if( isset($_GET['error']) ){
                        // si entro es que viene un error marcado en la url con query string
                        $error = $_GET['error'];                    
                        // echo "<p class='error'>Hay un error en el campo $campo de tipo $error</p>";
                    }
                    ?>

                    <!-- AQUÍ MOSTRAMOS EL ERROR SEA CUAL SEA -->
                    <span class="error"><?php if(isset($error)){echo "Usuario y/o contraseña incorrectos";} ?></span>

                    <label for="usuario">Usuario *</label>
                    <input type="text" name="usuario" id="usuario" placeholder="* Escribe tu usuario" value="">

                    <label for="pass">Contraseña *</label>
                    <input type="password" name="password" id="pass" placeholder="Contraseña">    
                    
                    <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                    <input type="submit" value="ENVIAR" class="boton">

                    <p>* Campos obligatorios</p>

                    <a href="<?=$_ENV['RUTA']?>/es/registro">¿No eres socio aún? Regístrate aquí</a>

                </form>
            </article>
        <?php
        }
        ?>

        
           
    </header>

    

    <!-- FOOTER -->
    <?php include './php/includes/es/footer.php'?>


</body>
</html>