<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Papelería - Productos</title>
  <style>
     /* Estilos generales del cuerpo */
    body {
      font-family: Arial, sans-serif;
      background: #0d6ce1a1;
      margin: 0;
      padding: 20px;
    }

    /* Título principal */
    h1 {
      text-align: center;
      color: white;
      margin-bottom: 10px;
    }

    /* Contenedor del buscador */
    .buscador {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }

    /* Estilo del input de búsqueda */
    .buscador input[type="text"] {
      width: 350px;
      padding: 15px;
      border: none;
      border-radius: 8px 0 0 8px;
      outline: none;
      font-size: 14px;
    }

    /* Botón para limpiar búsqueda */
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

    /* Contenedor de productos en formato grid */
    .grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 20px;
    }

    /* Tarjetas individuales de productos */
    .grid-item {
      background: white;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      text-align: center;
    }

    /* Imagen del producto */
    .grid-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    /* Nombre del producto */
    .product-nombre {
      font-weight: bold;
      margin-bottom: 5px;
    }

    /* Precio del producto */
    .product-precio {
      color: #007b00;
      font-weight: bold;
      margin-bottom: 10px;
    }

    /* Campo para ingresar cantidad */
    input[type="number"] {
      width: 50px;
      padding: 5px;
      margin-bottom: 10px;
    }

    /* Botón comprar */
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
   
     .product-descripcion {
        font-size: 0.9em;
        color: #333;
        margin: 5px 0;
      }

    
  </style>
</head>
<body>

  <h1>Productos disponibles</h1>

  <!-- Buscador funcional -->
  <div class="buscador">
    <input type="text" id="buscador" placeholder="Buscar producto...">
    <button type="button" onclick="document.getElementById('buscador').value=''; filtrarProductos();">Limpiar</button>
  </div>

   <!-- Contenedor de productos -->
  <div class="grid">

   <!-- Producto 1 -->
  <div class="grid-item">
    <form action="formulario_compra.php" method="POST">
      <img src="imgProductos/cuaderno.jpeg" alt="Cuaderno" />
      <p class="product-descripcion">
        Cuaderno de 100 hojas, tamaño carta, ideal para escuela o trabajo. Portada resistente y rayado estándar.
      </p>
      <div class="product-nombre">Cuaderno</div>
      <div class="product-precio">$25.00</div>

      <input type="hidden" name="producto" value="Cuaderno" />
      <input type="hidden" name="precio" value="25.00" />
      <input type="hidden" name="categoria" value="Papelería" />
      Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
      <button type="submit" class="btn-comprar">Comprar</button>
    </form>
  </div>

  <!-- Producto 2 -->
  <div class="grid-item">
    <form action="formulario_compra.php" method="POST">
      <img src="imgProductos/lapiceros.jpeg" alt="Bolígrafos" />
      <p class="product-descripcion">
        Paquete de bolígrafos de tinta azul, negra y roja punta media. Escritura suave y uniforme.
      </p>
      <div class="product-nombre">Bolígrafos</div>
      <div class="product-precio">$25.00</div>

      <input type="hidden" name="producto" value="Bolígrafos" />
      <input type="hidden" name="precio" value="25.00" />
      <input type="hidden" name="categoria" value="Papelería" />
      Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
      <button type="submit" class="btn-comprar">Comprar</button>
    </form>
  </div>

  <!-- Producto 3 -->
  <div class="grid-item">
    <form action="formulario_compra.php" method="POST">
      <img src="imgProductos/prisma.jpg" alt="Colores" />
      <p class="product-descripcion">
        Caja con 24 colores de madera. Pigmentos intensos y resistentes al desgaste.
      </p>
      <div class="product-nombre">Colores</div>
      <div class="product-precio">$75.00</div>

      <input type="hidden" name="producto" value="Colores" />
      <input type="hidden" name="precio" value="75.00" />
      <input type="hidden" name="categoria" value="Papelería" />
      Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
      <button type="submit" class="btn-comprar">Comprar</button>
    </form>
  </div>

  <!-- Producto 4 -->
  <div class="grid-item">
    <form action="formulario_compra.php" method="POST">
      <img src="imgProductos/marcatextos.jpg" alt="Marcatextos" />
      <p class="product-descripcion">
        Paquete de 3 marcatextos fluorescentes en colores surtidos. Punta biselada para subrayar o resaltar.
      </p>
      <div class="product-nombre">Marcatextos</div>
      <div class="product-precio">$20.00</div>

      <input type="hidden" name="producto" value="Marcatextos" />
      <input type="hidden" name="precio" value="20.00" />
      <input type="hidden" name="categoria" value="Papelería" />
      Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
      <button type="submit" class="btn-comprar">Comprar</button>
    </form>
  </div>

  <!-- Producto 5 -->
  <div class="grid-item">
    <form action="formulario_compra.php" method="POST">
      <img src="imgProductos/regla.jpg" alt="Regla 30cm" />
      <p class="product-descripcion">
        Regla de plástico transparente de 30 cm con medidas precisas en milímetros y centímetros.
      </p>
      <div class="product-nombre">Regla 30cm</div>
      <div class="product-precio">$15.00</div>

      <input type="hidden" name="producto" value="Regla 30cm" />
      <input type="hidden" name="precio" value="15.00" />
      <input type="hidden" name="categoria" value="Papelería" />
      Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
      <button type="submit" class="btn-comprar">Comprar</button>
    </form>
  </div>

  <!-- Producto 6 -->
  <div class="grid-item">
    <form action="formulario_compra.php" method="POST">
      <img src="imgProductos/tijeras.jpg" alt="Tijeras escolares" />
      <p class="product-descripcion">
        Tijeras escolares con punta redonda, seguras para niños y con mango ergonómico.
      </p>
      <div class="product-nombre">Tijeras escolares</div>
      <div class="product-precio">$15.00</div>

      <input type="hidden" name="producto" value="Tijeras escolares" />
      <input type="hidden" name="precio" value="15.00" />
      <input type="hidden" name="categoria" value="Papelería" />
      Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
      <button type="submit" class="btn-comprar">Comprar</button>
    </form>
  </div>

  <!-- Producto 7 -->
  <div class="grid-item">
    <form action="formulario_compra.php" method="POST">
      <img src="imgProductos/pritt.jpg" alt="Pegamento en barra" />
      <p class="product-descripcion">
        Pegamento en barra de 20g, ideal para papel y cartón. Secado rápido y sin residuos.
      </p>
      <div class="product-nombre">Pegamento en barra</div>
      <div class="product-precio">$15.00</div>

      <input type="hidden" name="producto" value="Pegamento en barra" />
      <input type="hidden" name="precio" value="15.00" />
      <input type="hidden" name="categoria" value="Papelería" />
      Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
      <button type="submit" class="btn-comprar">Comprar</button>
    </form>
  </div>

  <!-- Producto 8 -->
  <div class="grid-item">
    <form action="formulario_compra.php" method="POST">
      <img src="imgProductos/bond.jpg" alt="Papel bond" />
      <p class="product-descripcion">
        Resma de papel bond tamaño carta (500 hojas), ideal para impresión y escritura.
      </p>
      <div class="product-nombre">Papel bond</div>
      <div class="product-precio">$100.00</div>

      <input type="hidden" name="producto" value="Papel bond" />
      <input type="hidden" name="precio" value="100.00" />
      <input type="hidden" name="categoria" value="Papelería" />
      Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
      <button type="submit" class="btn-comprar">Comprar</button>
    </form>
  </div>

  <!-- Producto 9 -->
  <div class="grid-item">
    <form action="formulario_compra.php" method="POST">
      <img src="imgProductos/car.jpg" alt="Carpeta plástica" />
      <p class="product-descripcion">
        Carpeta plástica tamaño carta con broche metálico, ideal para archivar documentos.
      </p>
      <div class="product-nombre">Carpeta plástica</div>
      <div class="product-precio">$85.00</div>

      <input type="hidden" name="producto" value="Carpeta plástica" />
      <input type="hidden" name="precio" value="85.00" />
      <input type="hidden" name="categoria" value="Papelería" />
      Cantidad: <input type="number" name="cantidad" value="1" min="1" required /><br />
      <button type="submit" class="btn-comprar">Comprar</button>
    </form>
  </div>

  <!-- Producto 10 -->
  <div class="grid-item">
    <form action="formulario_compra.php" method="POST">
      <img src="imgProductos/marca.jpg" alt="Marcadores" />
      <p class="product-descripcion">
        Set de marcadores permanentes de colores intensos. Punta fina para trazos precisos.
      </p>
      <div class="product-nombre">Marcadores</div>
      <div class="product-precio">$100.00</div>

      <input type="hidden" name="producto" value="Marcadores" />
      <input type="hidden" name="precio" value="100.00" />
      <input type="hidden" name="categoria" value="Papelería" />
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
         background-color: #09226fff;
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
