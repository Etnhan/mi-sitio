<?php

   /*Inicia la sesión (necesario para acceder o destruir sesiones activas)*/
   session_start();

   /*Destruye toda la información de la sesión actual (cierra la sesión del usuario)*/
   session_destroy();

   /*Redirige al usuario a la página de inicio de sesión*/

   header("location: ../iniciar sesion.php");
?>
