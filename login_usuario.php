<?php  
// Incluye el archivo que conecta a la base de datos
include 'conexion_kain.php'; 

// Inicia la sesión para poder guardar datos del usuario logueado
session_start();

// Obtiene los datos ingresados por el usuario desde el formulario
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Consulta SQL para verificar si existe un usuario con ese correo y contraseña
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena'");

// Verifica si la consulta encontró al menos un resultado
if(mysqli_num_rows($validar_login) > 0) {
    // Si el usuario existe, obtiene sus datos en un array asociativo
    $datos = mysqli_fetch_assoc($validar_login);

    // Guarda el nombre del usuario en la sesión 
    $_SESSION['usuario'] = $datos['nombre_usuario']; 

    // Redirige al menú principal
    header("location: ../menu.php");
    exit;
} else {
    // Si no se encuentra el usuario, muestra un mensaje y regresa a la página de login
    echo '
      <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location = "../iniciar sesion.php";
      </script>
    ';
    exit;
}
?>
