<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Papelería - Productos</title>
  <style>
   body {
      font-family: Arial, sans-serif;              /* Fuente predeterminada */
      background: #0d6ce1a1;                       /* Color de fondo */
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;                          /* Centra el título */
      color: white;                                /* Color del texto */
      margin-bottom: 10px;
    }

    .buscador {
      display: flex;                               /* Coloca elementos en fila */
      justify-content: center;                     /* Centrado horizontal */
      margin-bottom: 30px;
    }

    .buscador input[type="text"] {
      width: 300px;
      padding: 10px;
      border: none;
      border-radius: 8px 0 0 8px; /* bordes redondeados a la izquierda*/
      outline: none;
      font-size: 14px;
    }

    .buscador button {
      padding: 10px 16px;
      background-color: #084dc3;
      color: white;
      border: none;
      border-radius: 0 8px 8px 0;   /* Bordes redondeados a la derecha */
      cursor: pointer;
      font-size: 14px;
    }

    .buscador button:hover {
      background-color: #062f86;
    }

    .grid {
     display: grid;  /* Usa diseño de grilla */
     grid-template-columns: repeat(5, 1fr); /* 5 columnas iguales */
     gap: 20px;
    }


    .grid-item {
      background: white;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Sombra ligera */
      text-align: center;
    }

    .grid-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;  /* Ajusta imagen sin deformarla */
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .product-nombre {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .product-precio {
      color: #007b00;
      font-weight: bold;
      margin-bottom: 10px;
    }

    input[type="number"] {
      width: 50px;
      padding: 5px;
      margin-bottom: 10px;
    }

    .btn-comprar {
      background-color: #0d6efd;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-comprar:hover {
      background-color: #084dc3;
    }
  </style>
</head>
<body>

  <h1>Alimentos y Bebidas</h1>

  <div class="buscador"> <!--Contenedor del buscador-->
    <input type="text" id="buscador" placeholder="Buscar producto..."> <!-- Input para buscar -->
    <button type="button" onclick="document.getElementById('buscador').value=''; 
    filtrarProductos();">Limpiar</button> <!-- Botón para limpiar búsqueda -->
  </div>

  <div class="grid">

  <!-- Producto 1 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/beans.jpeg" alt="Frijoles" />
    <div class="product-nombre">Frijoles</div>
    <div class="product-precio">$25.50</div>
    <div class="product-descripcion">Frijoles enteros en bolsa de 1 kg, ideales para guisos y sopas.</div>

    <input type="hidden" name="producto" value="Frijoles" />
    <input type="hidden" name="precio" value="25.50" />
    <input type="hidden" name="categoria" value="Alimentos" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 2 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/Arroz.jpg" alt="Arroz" />
    <div class="product-nombre">Arroz</div>
    <div class="product-precio">$24.00</div>
    <div class="product-descripcion">Arroz blanco pulido, 1 kg. Perfecto para platillos mexicanos.</div>

    <input type="hidden" name="producto" value="Arroz" />
    <input type="hidden" name="precio" value="24.00" />
    <input type="hidden" name="categoria" value="Alimentos" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 3 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/chiles.jpg" alt="Lata de Chiles" />
    <div class="product-nombre">Lata de chiles</div>
    <div class="product-precio">$20.00</div>
    <div class="product-descripcion">Lata de chiles jalapeños en escabeche. 220 g.</div>

    <input type="hidden" name="producto" value="Lata de Chiles" />
    <input type="hidden" name="precio" value="20.00" />
    <input type="hidden" name="categoria" value="Alimentos" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 4 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/Nutri.jpg" alt="Leche" />
    <div class="product-nombre">Leche</div>
    <div class="product-precio">$24.00</div>
    <div class="product-descripcion">Leche entera nutri, 1 litro, marca Nutri Leche.</div>

    <input type="hidden" name="producto" value="Leche" />
    <input type="hidden" name="precio" value="24.00" />
    <input type="hidden" name="categoria" value="Alimentos" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 5 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/aceite.jpg" alt="Aceite" />
    <div class="product-nombre">Aceite</div>
    <div class="product-precio">$30.00</div>
    <div class="product-descripcion">Aceite vegetal comestible, botella de 900 ml.</div>

    <input type="hidden" name="producto" value="Aceite" />
    <input type="hidden" name="precio" value="30.00" />
    <input type="hidden" name="categoria" value="Alimentos" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 6 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/red.jpg" alt="Red cola" />
    <div class="product-nombre">Red cola</div>
    <div class="product-precio">$35.00</div>
    <div class="product-descripcion">Refresco sabor cola, presentación familiar de 3 L.</div>

    <input type="hidden" name="producto" value="Red cola" />
    <input type="hidden" name="precio" value="35.00" />
    <input type="hidden" name="categoria" value="Alimentos" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 7 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/pepsi.png" alt="Pepsi" />
    <div class="product-nombre">Pepsi</div>
    <div class="product-precio">$40.00</div>
    <div class="product-descripcion">Refresco Pepsi de 3 litros. Refrescante y burbujeante.</div>

    <input type="hidden" name="producto" value="Pepsi" />
    <input type="hidden" name="precio" value="40.00" />
    <input type="hidden" name="categoria" value="Alimentos" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 8 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/coca cola.jpg" alt="Coca cola" />
    <div class="product-nombre">Coca cola</div>
    <div class="product-precio">$44.00</div>
    <div class="product-descripcion">Coca-Cola original, botella de 3 litros. Sabor clásico.</div>

    <input type="hidden" name="producto" value="Coca cola" />
    <input type="hidden" name="precio" value="44.00" />
    <input type="hidden" name="categoria" value="Alimentos" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 9 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/agua.jpg" alt="Agua mineral" />
    <div class="product-nombre">Agua mineral</div>
    <div class="product-precio">$10.00</div>
    <div class="product-descripcion">Botella de agua mineral de 600 ml. Hidratación burbujeante.</div>

    <input type="hidden" name="producto" value="Agua mineral" />
    <input type="hidden" name="precio" value="10.00" />
    <input type="hidden" name="categoria" value="Alimentos" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 10 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/bonafont.jpg" alt="Bonafont" />
    <div class="product-nombre">Bonafont</div>
    <div class="product-precio">$16.00</div>
    <div class="product-descripcion">Agua natural Bonafont, botella de 1 litro. Sin gas, ligera.</div>

    <input type="hidden" name="producto" value="Bonafont" />
    <input type="hidden" name="precio" value="16.00" />
    <input type="hidden" name="categoria" value="Alimentos" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>


  </div>

   <script>
    const inputBuscador = document.getElementById('buscador');
    inputBuscador.addEventListener('input', filtrarProductos);

    function filtrarProductos() {
      const filtro = inputBuscador.value.toLowerCase();
      const productos = document.querySelectorAll('.grid-item');

      productos.forEach(producto => {
        const nombre = producto.querySelector('.product-nombre').textContent.toLowerCase();
        producto.style.display = nombre.includes(filtro) ? 'block' : 'none';
      });
    }
  </script>

  <footer> 

 <div style="text-align: center; margin-top: 20px;">
       <a href="index.html" style="
         display: inline-block;
         background-color: #2833a7;
         color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 15px;
        font-weight: bold;
       "> Regresar al Menú</a>
      </div>
  
  </footer>

</body>
</html>
