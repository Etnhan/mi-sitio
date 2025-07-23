<?php

// Datos para conectarse a la base de datos
$host = "localhost"; // Servidor de base de datos (localhost si es local)
$user = "root"; // Usuario de MySQL (por defecto "root" en XAMPP)
$pass = ""; // Contraseña (vacía por defecto en XAMPP)
$db = "registro_compras"; // Nombre de la base de datos que se va a usar


// Crea una nueva conexión a la base de datos usando MySQLi
$conn = new mysqli($host, $user, $pass, $db);

// Verifica si hubo un error al conectar
if ($conn->connect_error) {

  //Si hay error, muestra un mensaje y detiene la ejecución
  die("Error de conexión: " . $conn->connect_error);
}
?>
