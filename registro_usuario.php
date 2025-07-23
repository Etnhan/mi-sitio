<?php 
// Conexión a la base de datos
include 'conexion_kain.php';

// Obtener los datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Consulta SQL para insertar los datos del nuevo usuario (¡ojo, no es segura!)
$query = "INSERT INTO usuarios(nombre_usuario, email, contrasena)
          VALUES('$nombre_usuario', '$email' , '$contrasena')";

// Ejecutar la consulta
$ejecutar = mysqli_query($conexion, $query);

// Si se ejecutó correctamente, mostrar alerta y redirigir
if($ejecutar){
    echo '
       <script>
         alert("Usuario almacenado exitosamente");
         window.location = "../iniciar sesion.php";
       </script>
    ';
}
?>
