<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initia-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="css//style.css">
        
        <title>Login</title>
    </head>
    <body>
        <header>
            <h2 class="logo">EasyCompra</h2>

            <nav class="navegacion">
                <a href="index.html">Inicio</a>
                <a href="conocenos.html">Informacion</a>


                <button class="btn">Iniciar Sesion</button>
            </nav>
        </header>

        <div class="fondo">
           <span class="icono-cerrar"> <i>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round"
             stroke-linejoin="round" viewBox="0 0 24 24">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </i></span>


            <div class="contenedor-form login">
                <h2>Iniciar Sesión</h2>
                <form action="php/login_usuario.php" method="POST">
                    <div class="contenedor-input">
                        <span class="icono"><i class="fas fa-envelope"></i> </span>
                        <input type="email" name="email" required>
                        <label for="#">Email</label>
                    </div>

                  <div class="contenedor-input">
                        <span class="icono"><i class="fas fa-lock"></i> </span>
                        <input type="password" name="contrasena" required>
                        <label for="#">Contraseña</label>
                    </div>

                    <div class="recordar">
                        <label for="#"><input type="checkbox">Recordar Sesion</label>
                        <a href="#">¿Olvide la contraseña?</a>
                    </div>

                    <button type="submit" class="btn">Iniciar Sesion</button>

                    <div class="registrar">
                        <p>¿No tienes Cuenta? <a href="#" class="registrar-link">Registrarse</a></p>
                    </div>
  
                </form>
            </div>

            <div class="contenedor-form registrar">
                <h2>Registrarse</h2>
                <form action="php/registro_usuario.php" method="POST">

                   <div class="contenedor-input">
                      <span class="icono"><i class="fas fa-user"></i></span>
                      <input type="text" name="nombre_usuario" required>
                      <label for="#">Nombre de Usuario</label>
                     </div>

                    <div class="contenedor-input">
                        <span class="icono"><i class="fas fa-envelope"></i> </span>
                        <input type="email" name= "email" required>
                        <label for="#">Email</label>
                    </div>

                  <div class="contenedor-input">
                        <span class="icono"><i class="fas fa-lock"></i> </span>
                        <input type="password" name="contrasena" required>
                        <label for="#">Contraseña</label>
                    </div>

                    <div class="recordar">
                        <label for="#"><input type="checkbox">Acepto los terminos y condiciones</label>
                    </div>

                    <button type="submit" class="btn">Registrarme</button>

                    <div class="registrar">
                        <p>¿Tienes una cuenta? <a href="#" class="login-link">Iniciar Sesion</a></p>
                    </div>

                </form>
            </div>
        </div>

         <script src="js/app.js"></script>
    </body>
</html>