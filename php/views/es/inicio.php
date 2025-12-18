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
        <h1>Lorem Ipsum Aginaga</h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">Lorem ipsum</a>
    </header>

    <main>
        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Lorem ipsum en Aginaga</h2>
            </div>

            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Lorem ipsum para cada día</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla sapien vitae lorem rhoncus, ut egestas nisl molestie. Sed placerat ligula eu justo dictum, at iaculis orci gravida. Vivamus sit amet laoreet augue, ac sodales arcu. Praesent commodo sem vel varius accumsan, fusce sollicitudin arcu vel est aliquam.</p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4>Equipo lorem experto</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="moduloBoton01">
                                <span>Lorem ipsum dolor</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4>Calidad lorem ipsum</h4>
                            <p>Elaborado cada día con detalle y cuidado.</p>
                            <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton01">
                                <span>Lorem ipsum dolor</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span>Lorem ipsum dolor sit</span>
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
                <h2>Lorem ipsum dolor sit amet</h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                <h3>Lorem ipsum con tradición lorem</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id dignissim augue. Praesent bibendum mauris et nisl vehicula, in cursus eros suscipit. Sed vitae sapien ultricies, bibendum augue id, tempus ligula. Nunc tincidunt eros id magna blandit, vel pulvinar lorem facilisis. In at convallis ipsum, sit amet aliquam nulla.</p>

                <p>Curabitur elementum augue eget turpis tincidunt, id auctor enim congue. Donec mattis lorem non aliquam faucibus. Suspendisse gravida mi et aliquam tempor. In hendrerit, neque non placerat fermentum, lorem augue vulputate libero, sit amet congue lorem est a magna. Phasellus fermentum neque sed nunc tristique, vitae convallis dolor tristique.</p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderas-profesionales-1500.avif" alt="Equipo de panaderos de Aginaga trabajando en el obrador" title="Equipo de panaderos de Aginaga">
            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3>Lorem ipsum de nuestra historia</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida mattis nisl, ac ornare risus dictum vitae. Curabitur interdum lacus ac justo interdum, eget ullamcorper leo interdum. Vivamus vehicula, arcu id ultricies laoreet, lectus lacus suscipit mauris, id laoreet augue lorem quis lectus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra, odio eu tempus porttitor, neque urna dictum felis, vel cursus ligula velit sed justo. Cras malesuada eros sit amet pharetra dapibus.</p>
                <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="boton">Lorem ipsum</a>
            </article>

            <!-- artículo 06 -->
            <article class="art06">
                <div>
                    <h3>Lorem ipsum en cada bocado</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ultricies tortor vitae orci consequat, ut feugiat eros ultrices.</p>
                    <p>Etiam id consectetur ipsum. Morbi eleifend eros sed bibendum blandit. Quisque facilisis vulputate tortor, nec luctus justo blandit id. Donec at sem eget neque tempor auctor at quis justo.</p>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" title="" class="boton">Lorem ipsum</a>
                </div>
            </article>

        </section>

        <!-- SECCIÓN PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Lorem ipsum de productos</h2>
            </div>

            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3>Lorem ipsum con calidad diaria</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer suscipit risus nec dignissim dignissim. Vivamus condimentum, augue vitae hendrerit vestibulum, nibh enim facilisis ex, at volutpat elit sem quis nulla. Sed pretium hendrerit nisl, eu tincidunt sem interdum in. Nullam vitae sapien eget lorem aliquet bibendum et non libero. Suspendisse mollis, tortor et aliquet tempor, arcu quam vulputate sapien, eget iaculis sem lectus et ipsum. Aenean finibus nibh vel lacinia luctus. Praesent sed ipsum maximus, cursus nisl ut, ornare eros. Curabitur vitae elementum erat. Integer facilisis nisl at turpis posuere, ut ullamcorper libero accumsan. Praesent dapibus, augue vitae hendrerit dapibus, justo mi condimentum massa, vitae faucibus ligula quam in felis. Nam sed sapien fermentum, scelerisque nunc sit amet, tristique lectus.</p>
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
