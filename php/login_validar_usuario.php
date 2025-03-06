<?php
 

    
    session_start();
    include 'conexion.php';
    
    // Verifica que los datos fueron enviados
    
    
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena); // Encriptamos para comparar

     // Consultamos en la base de datos
     $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico ='$correo' AND contrasena = '$contrasena'");
    
     if (mysqli_num_rows($validar_login) > 0) {
         $_SESSION['usuarios'] = $correo; // Guarda sesión del usuario
         header("location: ../introduccion.php"); // Redirige correctamente
         //exit;
     } else { 
         echo '<script>
                 alert("Usuario o contraseña incorrectos.");
                 window.location = "../loguin.php";
               </script>';
         exit;
     }



    ?>
