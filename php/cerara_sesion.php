<?php
      session_start();
      session_destroy();
      header("location: ../loguin.php"); // Redirige al login después de cerrar sesión
      exit;
?>