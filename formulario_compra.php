<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Necesitas tener una cuenta para poder hacer el registro");
            window.location = "iniciar sesion.php";
        </script>
    ';
    exit;
}

if (!isset($_POST['producto'], $_POST['precio'], $_POST['cantidad'], $_POST['categoria'])) {
  die("Acceso no válido.");
}

$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$total = $precio * $cantidad;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Compra</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #21a4eaff;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 40px auto;
      padding: 20px 30px;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #333;
    }

    p {
      font-size: 16px;
      margin: 10px 0;
      color: #444;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
    }

    button {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      background-color: #20afd7ff;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0e32d3ff;
    }

    .resumen {
      background-color: #f1f1f1;
      padding: 15px;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    strong {
      font-size: 18px;
      color: #000;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Finalizar Compra</h2>
    <div class="resumen">
      <p>Producto: <?php echo htmlspecialchars($producto); ?></p>
      <p>Precio: $<?php echo number_format($precio, 2); ?></p>
      <p>Cantidad: <?php echo $cantidad; ?></p>
      <p><strong>Total: $<?php echo number_format($total, 2); ?></strong></p>
    </div>

    <form action="php/registrar_compra.php" method="POST">
      <input type="hidden" name="producto" value="<?php echo $producto; ?>">
      <input type="hidden" name="precio" value="<?php echo $precio; ?>">
      <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
      <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">

      <label>Nombre:
        <input type="text" name="nombre" required>
      </label>

      <label>Dirección:
        <textarea name="direccion" required></textarea>
      </label>

      <label>Teléfono:
        <input type="text" name="telefono" required>
      </label>

      <button type="submit">Finalizar Compra</button>
    </form>
  </div>
</body>
</html>
