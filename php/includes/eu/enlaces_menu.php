<ul>
    <li><a href="<?=$_ENV['RUTA']?>/eu" title="Hasierako orria">Hasiera</a></li>
    <li><a href="<?=$_ENV['RUTA']?>/eu/guri-buruz" title="Zure okinak eta gozogileak Aginagan">Guri buruz</a></li>
    <li><a href="<?=$_ENV['RUTA']?>/eu/produktuak" title="Gure ogi, pastel eta torrija onenak">Produktuak</a></li>
    <li><a href="<?=$_ENV['RUTA']?>/eu/produktuak/okindegia" title="Ogi onenak">Okindegia</a></li>
    <li><a href="<?=$_ENV['RUTA']?>/eu/produktuak/goxotegia" title="Gozogintza artisaua">Goxotegia</a></li>
    <li><a href="<?=$_ENV['RUTA']?>/eu/produktuak/torrijak" title="Gipuzkoako torrija onenak">Torrijak</a></li>
    <li><a href="<?=$_ENV['RUTA']?>/eu/kontaktua" title="Kontaktua Aginaga okindegiarekin">Kontaktua</a></li>
    <?php
    if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
        // MOSTRARÉ EL CONTENIDO PRIVADO
    ?>
    <li><a href="<?=$_ENV['RUTA']?>/es/zona-admin" title="Pribatua lekua">Admin lekua</a></li>
    <li><a href="<?=$_ENV['RUTA']?>/es/logout" title="Atera">logout</a></li>
    <?php
    }else{
    ?>
    <li><a href="<?=$_ENV['RUTA']?>/es/zona-admin" title="Pribatua lekua">Login</a></li>
    <?php
    }
    ?>
</ul>
