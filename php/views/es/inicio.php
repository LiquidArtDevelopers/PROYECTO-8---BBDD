<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería Aginaga | Obrador pastelería de alta calidad</title>
    <meta name="description" content="120 y 320 caracteres">
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/inicio.min.css">

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es">

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
        <h1>Panadería Aginaga</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">Contáctanos</a>    
    </header>

    <main>
        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Te presentamos tu panadería en Aginaga</h2>
            </div>

            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Producto artesanal para el día a día</h3>
                    <p>Llevamos más de 100 años en Aginaga satisfaciendo a nuestros clientes con los mejores panes de masa madre y harinas de la mejor calidad. Nuestra pastelería dispone de un amplio surtido, elaborada los mejores productos </p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4>Panaderos de profesión</h4>
                            <p>Conoce nuestro equipo de obradores y panaderos.</p>
                            <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="moduloBoton01">
                                <span>Conoce nuestro equipo</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4>Productos de primera calidad</h4>
                            <p>Elaborados cada día por los maestros obradores con las mejores harinas.</p>
                            <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton01">
                                <span>Nuestros productos</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span>Contacta con nosotros</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Más de 100 años ofreciendo la mejor calidad en Agiña" title="Más de 100 años ofreciendo la mejor calidad en Agiña">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-pasteleria-aginaga-1500.avif" alt="" title="">
                </div>
            </article>            
        </section>

        <!-- SECCIÓN SOBRE NOSOTROS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Conóce nuestro equipo</h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                <h3>Un equipo con más de 100 años de tradición panadera</h3>

                <p>En Aginaga, el pan es mucho más que un alimento: es el legado de generaciones de panaderos que, desde hace más de 100 años, madrugan cada día para mantener viva una forma de trabajar auténtica. Nuestro equipo combina la sabiduría artesanal heredada con técnicas actuales, logrando panes que conservan todo el sabor y la textura de antaño.</p>

                <p>Detrás de cada pieza horneada hay manos expertas, paciencia y pasión. Elaboramos nuestras masas lentamente, respetando los tiempos de fermentación natural y seleccionando harinas de primera calidad. Así conseguimos panes crujientes por fuera, tiernos por dentro y con ese aroma inconfundible que solo se logra en un obrador de verdad.</p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderas-profesionales-1500.avif" alt="Equipo de panaderos de Aginaga trabajando en el obrador" title="Equipo de panaderos de Aginaga">
            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3>Descubre la historia de nuestra panadería</h3>
                <p>Desde 1923, nuestra panadería ha sido el corazón de Aginaga, un lugar donde la tradición y la innovación se encuentran para crear productos excepcionales. Tres generaciones de maestros panaderos han mantenido vivo el arte de la panadería artesanal.</p>
                <p>Te invitamos a conocer más sobre nuestra historia, nuestro equipo y la pasión que ponemos en cada producto que elaboramos. Descubre cómo hemos evolucionado manteniendo la esencia de lo artesanal.</p>
                <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="boton">Conoce nuestra historia</a>
            </article>

            <!-- artículo 06 -->
            <article class="art06">
                <div>
                    <h3>El alma de Aginaga en cada bocado</h3>
                    <p>Más allá de ser una simple panadería, somos un punto de encuentro donde los vecinos comparten historias mientras eligen su pan diario. El aroma a pan recién horneado que inunda nuestras calles cada mañana se ha convertido en parte de la identidad de Aginaga.</p>
                    <p>Nuestro obrador es un espacio donde la tradición cobra vida, donde cada pieza tiene una historia que contar y donde el tiempo se toma su curso natural. Te invitamos a formar parte de esta experiencia única, a conocer de primera mano por qué somos mucho más que una panadería.</p>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" title="" class="boton">Ven a visitarnos</a>
                </div>
            </article>

        </section>

        <!-- SECCIÓN PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Nuestros productos</h2>
            </div>

            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3>La mejor calidad en productos realizados cada día</h3>                  
                    <p>Nuestra carta de productos se actualiza cada estación, pero se fundamenta en tres pilares que definen nuestra identidad. En primer lugar, el <b>pan de masa madre</b> que fermenta durante 24 horas, desarrollando una corteza crujiente y un alveolado irregular lleno de sabor y nutrientes: es el favorito de quienes nos buscan como “<b>panadería en Aginaga</b>” o “<b>pan masa madre en Usurbil</b>”. En segundo lugar, nuestros <b>pasteles artesanos</b>, elaborados con mantequilla y huevos de caserío, sin aromas artificiales, con rellenos de temporada como crema de avellana de Navarra o compota de manzana reineta. Finalmente, las <b>torrijas</b>, inspiradas en la receta de la amona pero disponibles todo el año; las servimos con miel de azahar o con un delicado almíbar de vainilla bourbon que las hace inolvidables. Cada producto cuenta con su propio proceso cuidadoso, fichas de alérgenos actualizadas y la posibilidad de <b>reserva online</b> para que llegues y lo tengas listo. Además, nuestras famosas <b>torrijas de Aginaga</b> pueden reservarse en línea para cualquier celebración, destacando nuestra <b>panadería en Aginaga</b> como la opción preferida para un dulce tradicional.</p>
                    <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton02">
                        <span>Más información</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a Nuestros productos" title="Más información">
                    </a>
                </div>

                <div class="imagenes">                    
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoPanes" title="Los mejores panes de masa madre">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Pan de masa madre en Usurbil y Aginaga" title="Pan de masa madre en Usurbil y Aginaga">
                        <h4>Panadería</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoPasteles" title="Pastelería artesana bajo demanda">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pasteles artesanos: del obrador a tu mesa" title="Pasteles artesanos: del obrador a tu mesa">
                        <h4>Pastelería</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoTorrijas" title="Torrijas tradicionales a fuego lento">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Torrijas tradicionales todo el año" title="Torrijas tradicionales todo el año">
                        <h4>Torrijas</h4>
                    </a>                    
                </div>
            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include './php/includes/es/footer.php'?>




</body>
</html>