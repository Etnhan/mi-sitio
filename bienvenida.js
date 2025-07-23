// Obtener elementos del DOM por su ID
const galeria = document.getElementById('galeria'); 
const flechaIzq = document.getElementById('flechaIzq');
const flechaDer = document.getElementById('flechaDer');
const inputBusqueda = document.getElementById('inputBusqueda');
const botonBuscar = document.getElementById('botonBusqueda');

// Lista de imágenes con su ruta y nombre de categoría
const imagenesInfo = [
  { src: "img/img1.png", alt: "CONOCENOS" },
  { src: "img/papeleria.jpg", alt: "PAPELERIA" },
  { src: "img/limpieza.jpg", alt: "LIMPIEZA"},
  { src: "img/img5.jpg.png", alt: "ALIMENTOS Y BEBIDAS" }
];

// Variables de control para el carrusel
let indiceInicio = 0;        // Índice desde el que se mostrarán imágenes
const visibleCount = 3;      // Cantidad de imágenes visibles a la vez
let modoBusqueda = true;     // true: buscar | false: limpiar resultados

// Función para renderizar (dibujar) la galería de imágenes
function renderGaleria(lista = imagenesInfo) {
  galeria.innerHTML = ''; // Limpia el contenido anterior

  // Muestra hasta `visibleCount` imágenes desde `indiceInicio`
  for (let i = 0; i < visibleCount && i < lista.length; i++) {
    const data = lista[(indiceInicio + i) % lista.length]; // Rota las imágenes si se pasa del final

    // Crea contenedor individual de imagen
    const contenedor = document.createElement('div');
    contenedor.classList.add('img-container');

    // Crea la imagen y le asigna atributos
    const img = document.createElement('img');
    img.classList.add('img');
    img.src = data.src;
    img.alt = data.alt;

    // Marca la primera como "seleccionada"
    if (i === 0) img.classList.add('seleccionada');

    // Evento al hacer clic en una imagen: marca esa imagen como seleccionada
    img.addEventListener('click', () => {
      galeria.querySelectorAll('img').forEach(im => im.classList.remove('seleccionada'));
      img.classList.add('seleccionada');
    });

    // Crea el texto con el nombre de la categoría
    const texto = document.createElement('span');
    texto.textContent = data.alt;

    // Crea el botón "Ver más"
    const boton = document.createElement('button');
    boton.textContent = "Ver más";
    boton.classList.add('btn-img');

    // Evento al hacer clic en "Ver más": redirige a la página correspondiente
    boton.addEventListener('click', () => {
      switch (data.alt.toLowerCase()) {
        case "conocenos":
          window.location.href = "conocenos.html";
          break;
        case "papeleria":
          window.location.href = "productos_papeleria.php";
          break;
        case "limpieza":
          window.location.href = "limpieza.php";
          break;
        case "alimentos y bebidas":
          window.location.href = "alimentos.php";
          break;
        default:
          window.location.href = `categoria.php?nombre=${encodeURIComponent(data.alt)}`;
          break;
      }
    });

    // Agrega imagen, texto y botón al contenedor
    contenedor.appendChild(img);
    contenedor.appendChild(texto);
    contenedor.appendChild(boton);

    // Agrega el contenedor a la galería
    galeria.appendChild(contenedor);
  }
}

// Función para buscar imágenes por texto
function buscarProducto() {
  // Si está en modo "limpiar", limpia y vuelve al estado original
  if (!modoBusqueda) {
    inputBusqueda.value = '';                          // Limpia el input
    renderGaleria(imagenesInfo);                       // Muestra todas las imágenes
    botonBuscar.innerHTML = '<i class="fas fa-search"></i>'; // Restaura ícono
    modoBusqueda = true;                               // Cambia a modo búsqueda
    return;
  }

  // Obtener texto del input de búsqueda y convertirlo a minúsculas
  const query = inputBusqueda.value.trim().toLowerCase();

  // Efecto visual del botón al hacer clic
  botonBuscar.classList.add('clicked');
  setTimeout(() => {
    botonBuscar.classList.remove('clicked');
  }, 200);

  // Filtrar imágenes que contengan el texto buscado en su alt
  const resultados = imagenesInfo.filter(img => img.alt.toLowerCase().includes(query));

  // Si no hay resultados o está vacío, muestra todo
  if (resultados.length === 0 || query === '') {
    renderGaleria(imagenesInfo);                       // Muestra todas
    botonBuscar.innerHTML = '<i class="fas fa-search"></i>';
    modoBusqueda = true;
  } else {
    // Si hay coincidencias, muestra solo esas
    indiceInicio = 0;
    renderGaleria(resultados);
    botonBuscar.textContent = 'Limpiar';               // Cambia botón a "Limpiar"
    modoBusqueda = false;                              // Cambia a modo limpiar
  }
}

// Evento para ejecutar búsqueda al presionar el botón de búsqueda
botonBuscar.addEventListener('click', buscarProducto);

// Evento para flecha derecha (siguiente imagen en carrusel)
flechaDer.addEventListener('click', () => {
  indiceInicio = (indiceInicio + 1) % imagenesInfo.length;
  renderGaleria();
});

// Evento para flecha izquierda (imagen anterior en carrusel)
flechaIzq.addEventListener('click', () => {
  indiceInicio = (indiceInicio - 1 + imagenesInfo.length) % imagenesInfo.length;
  renderGaleria();
});

// Renderizar galería por primera vez al cargar la página
renderGaleria();
