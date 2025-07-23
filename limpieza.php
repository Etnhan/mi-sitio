<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Papelería - Productos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #0d6ce1a1;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: white;
      margin-bottom: 10px;
    }

    .buscador {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }

    .buscador input[type="text"] {
      width: 300px;
      padding: 10px;
      border: none;
      border-radius: 8px 0 0 8px;
      outline: none;
      font-size: 14px;
    }

    .buscador button {
      padding: 10px 16px;
      background-color: #084dc3;
      color: white;
      border: none;
      border-radius: 0 8px 8px 0;
      cursor: pointer;
      font-size: 14px;
    }

    .buscador button:hover {
      background-color: #062f86;
    }

    .grid {
     display: grid;
     grid-template-columns: repeat(5, 1fr); /* 5 columnas fijas */
     gap: 20px;
    }

    .grid-item {
      background: white;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      text-align: center;
    }

    .grid-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
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

  <h1>Productos disponibles</h1>

   <div class="buscador">
    <input type="text" id="buscador" placeholder="Buscar producto...">
    <button type="button" onclick="document.getElementById('buscador').value=''; filtrarProductos();">Limpiar</button>
  </div>

  <div class="grid">


    <!-- Producto 1 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/fabuloso.jpg" alt="Fabuloso" />
    <p class="product-descripcion">Limpiador multiusos Fabuloso con fragancia duradera, ideal para pisos, baños y cocinas.</p>
    <div class="product-nombre">Fabuloso</div>
    <div class="product-precio">$22.50</div>
    <input type="hidden" name="producto" value="Fabuloso" />
    <input type="hidden" name="precio" value="22.50" />
    <input type="hidden" name="categoria" value="Limpieza" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 2 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/jalador.jpg" alt="Jalador" />
    <p class="product-descripcion">Trapeador absorbente con mango largo, perfecto para limpieza profunda de pisos.</p>
    <div class="product-nombre">Trapeador</div>
    <div class="product-precio">$60.00</div>
    <input type="hidden" name="producto" value="Jalador" />
    <input type="hidden" name="precio" value="60.00" />
    <input type="hidden" name="categoria" value="Limpieza" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 3 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/pinol.jpg" alt="Pinol" />
    <p class="product-descripcion">Desinfectante Pinol con aroma a pino, elimina bacterias y deja una fragancia agradable.</p>
    <div class="product-nombre">Pinol</div>
    <div class="product-precio">$25.00</div>
    <input type="hidden" name="producto" value="Pinol" />
    <input type="hidden" name="precio" value="25.00" />
    <input type="hidden" name="categoria" value="Limpieza" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 4 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/cloro.jpg" alt="Cloro" />
    <p class="product-descripcion">Cloro líquido concentrado para desinfección de superficies, baños y ropa blanca.</p>
    <div class="product-nombre">Cloro</div>
    <div class="product-precio">$20.00</div>
    <input type="hidden" name="producto" value="Cloro" />
    <input type="hidden" name="precio" value="20.00" />
    <input type="hidden" name="categoria" value="Limpieza" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 5 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/zote.jpg" alt="Jabon Zote" />
    <p class="product-descripcion">Jabón Zote multiusos para lavar ropa, limpiar superficies y eliminar manchas difíciles.</p>
    <div class="product-nombre">Jabon Zote</div>
    <div class="product-precio">$25.00</div>
    <input type="hidden" name="producto" value="Jabon Zote" />
    <input type="hidden" name="precio" value="25.00" />
    <input type="hidden" name="categoria" value="Limpieza" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 6 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/escoba.jpg" alt="Escoba" />
    <p class="product-descripcion">Escoba resistente con cerdas duraderas para uso doméstico y limpieza en exteriores.</p>
    <div class="product-nombre">Escoba</div>
    <div class="product-precio">$42.00</div>
    <input type="hidden" name="producto" value="Escoba" />
    <input type="hidden" name="precio" value="42.00" />
    <input type="hidden" name="categoria" value="Limpieza" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 7 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/bote.jpg" alt="Botes de basura" />
    <p class="product-descripcion">Bote de basura de plástico con tapa, resistente y fácil de limpiar. Ideal para hogar u oficina.</p>
    <div class="product-nombre">Botes de Basura</div>
    <div class="product-precio">$105.00</div>
    <input type="hidden" name="producto" value="Botes de Basura" />
    <input type="hidden" name="precio" value="105.00" />
    <input type="hidden" name="categoria" value="Limpieza" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 8 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/aspiradora.jpg" alt="Aspiradora" />
    <p class="product-descripcion">Aspiradora eléctrica de alto rendimiento para polvo, alfombras y superficies duras.</p>
    <div class="product-nombre">Aspiradora</div>
    <div class="product-precio">$1000.00</div>
    <input type="hidden" name="producto" value="Aspiradora" />
    <input type="hidden" name="precio" value="1000.00" />
    <input type="hidden" name="categoria" value="Limpieza" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 9 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/recogedor.jpg" alt="Recogedor" />
    <p class="product-descripcion">Recogedor de plástico con mango ergonómico, ideal para recoger polvo y residuos fácilmente.</p>
    <div class="product-nombre">Recogedor</div>
    <div class="product-precio">$40.00</div>
    <input type="hidden" name="producto" value="Recogedor" />
    <input type="hidden" name="precio" value="40.00" />
    <input type="hidden" name="categoria" value="Limpieza" />
    Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
    <button type="submit" class="btn-comprar">Comprar</button>
  </form>
</div>

<!-- Producto 10 -->
<div class="grid-item">
  <form action="formulario_compra.php" method="POST">
    <img src="imgProductos/pala.jpg" alt="Pala" />
    <p class="product-descripcion">Pala de aluminio con mango reforzado, ideal para jardinería, limpieza o construcción.</p>
    <div class="product-nombre">Pala</div>
    <div class="product-precio">$170.00</div>
    <input type="hidden" name="producto" value="Pala" />
    <input type="hidden" name="precio" value="170.00" />
    <input type="hidden" name="categoria" value="Limpieza" />
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
