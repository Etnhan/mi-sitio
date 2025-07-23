<?php 

/*Inicia la sesión para acceder a variables de sesión como el usuario logueado*/
session_start();

/*Verifica si el usuario NO ha iniciado sesión*/
if (!isset($_SESSION['usuario'])) {

  /* Si no hay sesión iniciada, muestra una alerta y redirige a la página de login*/
    echo '
        <script>
            alert("Debes iniciar sesión para finalizar la compra");
            window.location = "iniciar sesion.php";
        </script>
    ';
    exit; /*Detiene la ejecución del script*/
}

/* Verifica que se hayan recibido TODOS los datos del formulario vía POST*/
if (!isset($_POST['producto'], $_POST['precio'], $_POST['cantidad'], $_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['categoria'])) {
    die("Datos incompletos."); /* Si falta algún dato, detiene la ejecución*/
}

/*Asigna los datos recibidos del formulario a variables locales*/

$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$categoria = $_POST['categoria'];

/* Incluye el archivo de conexión a la base de datos*/
include 'conexion_bd.php';

/* Prepara una consulta SQL para insertar los datos en la tabla compras*/
$stmt = $conn->prepare("INSERT INTO compras (producto, precio, cantidad, nombre, direccion, telefono, categoria) 
                       VALUES (?, ?, ?, ?, ?, ?, ?)");

/*Asocia los parámetros recibidos a los marcadores de la consulta SQL
 Tipos: s (string), d (double), i (integer)*/
$stmt->bind_param("sdissss", $producto, $precio, $cantidad, $nombre, $direccion, $telefono, $categoria);

// Inicializa variables para el mensaje y el estado del resultado
$mensaje = "";
$exito = false;

/* Ejecuta la consulta*/
if ($stmt->execute()) {

   /* Si fue exitoso, prepara mensaje de éxito*/
    $mensaje = "¡Compra registrada con éxito!";
    $exito = true;
} else {
   /* Si hubo error, muestra el mensaje de error de MySQL*/
    $mensaje = "Error al registrar la compra: " . $conn->error;
}

/* Cierra la consulta y la conexión a la base de datos*/
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado de compra</title>
  <style>
    body {
      background: #f2f2f2;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .contenedor {
      background-color: white;
      border-radius: 12px;
      padding: 30px 40px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      text-align: center;
      max-width: 400px;
    }

    .contenedor h2 {
      /* Color verde si fue exitoso, rojo si hubo error */
      color: <?= $exito ? '#28a745' : '#dc3545' ?>;
      margin-bottom: 20px;
    }

    .contenedor a {
      display: inline-block;
      margin-top: 15px;
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .contenedor a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<!-- Muestra el mensaje (éxito o error) de forma segura -->
  <div class="contenedor">
    <h2><?= htmlspecialchars($mensaje) ?></h2>

    <!-- Botón para regresar al menú principal -->
    <a href="../menu.php">Volver al menú</a>
  </div>
</body>
</html>
