<?php
// zona de variables de entorno
// Adaptamos el enrutamiento a donde esté /vendor y donde esté el .env
require_once '../../vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('../../');
$dotenv->load();


include_once "../config/helpers.php";

// 01 Recoger los datos enviados por el form
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass1 = $_POST['password'];
$pass2 = $_POST['passwordrepeat'];
$terminos = $_POST['terminos'];
$lang = $_POST['inputIdioma'];

echo $nombre .'<br>';
echo $correo .'<br>';
echo $pass1 .'<br>';
echo $pass2 .'<br>';
echo $terminos .'<br>';

// errores nombre
// vacio nombre
if(empty($nombre)){    
    mensaje_error_logup($_ENV['RUTA'], "Has dejado el nombre vacío", $lang);
}
// vacio correo
if(empty($correo)){    
    mensaje_error_logup($_ENV['RUTA'], "Has dejado el correo vacío", $lang);
}