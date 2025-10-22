<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aginagako Okindegia | Kalitate handiko gozotegi lantegia</title>
    <meta name="description" content="120 eta 320 karaktere">
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/inicio.min.css">



    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu">

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



    <!-- HERO01 -->
    <header>        
        <h1>Aginagako Okindegia</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" class="boton">Jarri harremanetan</a>    
    </header>



    <main>

        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Hona hemen zure okindegia Aginagan</h2>
            </div>

            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Eguneroko produktu artisaua</h3>
                    <p>100 urte baino gehiago daramatzagu Aginagan gure bezeroak kalitate oneneko ama orez eta irinez egindako ogi onenekin asetzen. Gure gozotegiak produktu sorta zabala du, produktu onenekin egina</p>
                    <span></span>
                    <div class="cards">

                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4>Lanbidez okinak</h4>
                            <p>Ezagutu gure lantegi eta okinen taldea.</p>
                            <a href="<?=$_ENV['RUTA']?>/eu/guri-buruz" class="moduloBoton01">
                                <span>Ezagutu gure taldea</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4>Lehen mailako produktuak</h4>
                            <p>Egunero maisuek irin onenekin eginak.</p>
                            <a href="<?=$_ENV['RUTA']?>/eu/produktuak" class="moduloBoton01">
                                <span>Gure produktuak</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>

                    </div>
                    <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" class="moduloBoton02">
                        <span>Jarri gurekin harremanetan</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="100 urte baino gehiago kalitaterik onena eskaintzen Aginagan" title="100 urte baino gehiago kalitaterik onena eskaintzen Aginagan">
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
                <h2>Ezagutu gure taldea</h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                <h3>100 urte baino gehiagoko okin-tradizioa duen taldea</h3>
                <p>Aginagan, ogia elikagaia baino gehiago da: duela 100 urte baino gehiagotik egunero goiz jaikitzen diren okinen belaunaldien ondarea da, lan egiteko modu benetakoa bizirik mantentzeko. Gure taldeak heredatutako jakinduria artisaua teknika modernoekin uztartzen du, antzinako zapore eta testura guztiak gordetzen dituzten ogiak lortuz.</p>
                <p>Labean egindako pieza bakoitzaren atzean esku adituak, pazientzia eta pasioa daude. Gure oreak astiro egiten ditugu, hartzidura naturalaren denborak errespetatuz eta lehen mailako irinak hautatuz. Horrela lortzen ditugu kanpotik kurruskari, barrutik samur eta benetako lantegi batean soilik lortzen den usain bereizgarri hori duten ogiak.</p>
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderas-profesionales-1500.avif" alt="Aginagako okinen taldea lantegian lanean" title="Aginagako okinen taldea">

            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3>Ezagutu gure okindegiaren historia</h3>
                <p>1923tik, gure okindegia Aginagaren bihotza izan da, tradizioaren eta berrikuntzaren arteko topaketa salbuespenezko produktuak sortzeko. Hiru belaunaldiko okin maisuek bizirik mantendu dute okintza artisauaren artea.</p>
                <p>Gonbidatzen zaitugu gure historia, gure taldea eta egiten dugun produktu bakoitzean jartzen dugun pasioa hobeto ezagutzera. Ezagutu nola eboluzionatu dugun artisauaren esentzia mantenduz.</p>
                <a href="<?=$_ENV['RUTA']?>/eu/guri-buruz" class="boton">Ezagutu gure historia</a>
            </article>

            <!-- artículo 06 -->
            <article class="art06">
                <div>
                    <h3>Aginagaren arima ahokada bakoitzean</h3>
                    <p>Okindegi soil bat baino gehiago gara, auzokideek eguneko ogia aukeratzen duten bitartean istorioak partekatzen dituzten topagunea. Goizero gure kaleak betetzen dituen ogi berriaren usaina Aginagaren nortasunaren parte bihurtu da.</p>
                    <p>Gure lantegia tradizioa bizirik dagoen espazioa da, pieza bakoitzak kontatzeko istorio bat duen lekua eta denborak bere bide naturala hartzen duen tokia. Esperientzia paregabe honen parte izatera gonbidatzen zaitugu, zergatik garen okindegi bat baino askoz gehiago zuzenean ezagutzera.</p>
                    <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" title="" class="boton">Etorri bisitan</a>
                </div>
            </article>
        </section>

        

        <!-- SECCIÓN PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Gure produktuak</h2>
            </div>
            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3>Kalitaterik onena egunero egindako produktuetan</h3>
                    <p>Gure produktu-karta denboraldi bakoitzean eguneratzen da, baina gure nortasuna definitzen duten hiru zutabetan oinarritzen da. Lehenik, 24 orduz hartzitzen den <b>ama oreko ogia</b>, kraska kurruskaria eta zaporez eta mantenugaiz betetako albeolatu irregularra garatzen duena: hau da "<b>Aginagako okindegia</b>" edo "<b>ama oreko ogia Usurbilen</b>" bilatzen dutenen gogokoena. Bigarrenik, gure <b>pastel artisauak</b>, baserriko gurin eta arrautzekin eginak, zapore artifizialik gabe, Nafarroako hur-krema edo sagar erregina konpota bezalako sasoiko betegaiekin. Azkenik, <b>torrija</b>ak, amonaren errezetan inspiratuta baina urte osoan eskuragarri; azahar-eztiarekin edo bourbon banilla-almibarra fin batekin zerbitzatzen ditugu, ahaztezin bihurtzen dituena. Produktu bakoitzak bere prozesu arretatsua du, alergeno-fitxa eguneratuak eta <b>online erreserbatzeko</b> aukera, iritsi eta prest izateko. Gainera, gure <b>Aginagako torrija</b> ospetsuak online erresba daitezke edozein ospakizunetarako, gure <b>Aginagako okindegia</b> postre tradizional baterako aukera gogokoena izanik.</p>
                    <a href="<?=$_ENV['RUTA']?>/eu/produktuak" class="moduloBoton02">
                        <span>Informazio gehiago</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Joan Gure produktuetara" title="Informazio gehiago">
                    </a>
                </div>
                <div class="imagenes">
                    <a href="<?=$_ENV['RUTA']?>/eu/produktuak#hitoPanes" title="Ama oreko ogi onenak">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Ama oreko ogia Usurbilen eta Aginagan" title="Ama oreko ogia Usurbilen eta Aginagan">
                        <h4>Okindegia</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/eu/produktuak#hitoPasteles" title="Gozotegi artisaua eskariaren arabera">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pastel artisauak: lantegitik zure mahaira" title="Pastel artisauak: lantegitik zure mahaira">
                        <h4>Gozotegia</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/eu/produktuak#hitoTorrijas" title="Torrija tradizionalak su motelean">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Torrija tradizionalak urte osoan" title="Torrija tradizionalak urte osoan">
                        <h4>Torrijak</h4>
                    </a>
                </div>
            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include './php/includes/eu/footer.php'?>

</body>
</html>