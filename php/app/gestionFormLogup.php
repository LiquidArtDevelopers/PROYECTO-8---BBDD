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

// echo $nombre .'<br>';
// echo $correo .'<br>';
// echo $pass1 .'<br>';
// echo $pass2 .'<br>';
// echo $terminos .'<br>';

// VERIFICACIÓN

if(empty($terminos)){    
    mensaje_error_logup($_ENV['RUTA'], "Debes aceptar los términos y condiciones de privacidad.", $lang);
}

// vacio nombre
if(empty($nombre)){    
    mensaje_error_logup($_ENV['RUTA'], "Has dejado el nombre vacío.", $lang);
}
// EL NOMBRE NO ESTÁ ENTRE 3 Y 40 CARACTERES
$numeroCaracteres = strlen($nombre);
if($numeroCaracteres < 3 || $numeroCaracteres > 40){
    mensaje_error_logup($_ENV['RUTA'], "El nombre debe tener entre 3 y 40 caracteres máximo", $lang);
}

// vacio correo
if(empty($correo)){    
    mensaje_error_logup($_ENV['RUTA'], "Has dejado el correo vacío", $lang);
}
// QUE NO TENGA FORMATO DE CORREO
if(validar_email($correo)==false){    
    mensaje_error_logup($_ENV['RUTA'], "El correo no tiene un formato válido", $lang);
}

// PASS1 NO VENGA VACÍO
if(empty($pass1) || empty($pass2)){    
    mensaje_error_logup($_ENV['RUTA'], "No puedes dejar el campo contraseña vacío", $lang);
}

// QUE LOS PASSWORD NO COINCIDAN ENTRE SÍ
if($pass1 != $pass2){
    mensaje_error_logup($_ENV['RUTA'], "Las contraseñas no coinciden", $lang);
}


// consultar si existe algún usuario con ese mismo correo.
// conexión
$con = mysqli_connect($_ENV['BBDD_HOST'], $_ENV['BBDD_USER'], $_ENV['BBDD_PASS'], $_ENV['BBDD_BBDD']);
$con->set_charset("utf8mb4");

// sentencia sql (select)
$sql = "SELECT * FROM `usuarios` WHERE correo = '$correo'";
// ejecución de la consulta sql a la bbdd
$resultado = mysqli_query($con, $sql);
// comprobación del resultado (si existe un regisdtro con ese correo, mandamos error)
if(mysqli_num_rows($resultado) > 0){
    mensaje_error_logup($_ENV['RUTA'], "Ya existe un usuario con ese correo", $lang);
}
unset($resultado, $sql); //borrar de la memoria $resultado y $sql


// meter en la bbdd el nuevo usuario
$passCrypt = password_hash($pass1, PASSWORD_ARGON2ID);

// sentencia SQL para insertar
$sql = "INSERT INTO `usuarios`(`id_usuario`, `nombre`, `correo`, `password`) VALUES (NULL,'$nombre','$correo','$passCrypt')";
// ejecutar la sentencia
$resultado = mysqli_query($con, $sql);

unset($resultado, $sql); //borrar de la memoria $resultado y $sql
mysqli_close($con); //cerrando la conexión a la BBDD

// si todo bien redirigimos

$ruta = $_ENV['RUTA'];
switch ($lang){
    case "es":
        header("location:$ruta/es/zona-admin");
        die;
        break;
    case "eu":
        header("location:$ruta/eu/admin-gunea");
        die;
        break;
    default:
        header("location:$ruta/es/zona-admin");
        die;
        break;
}