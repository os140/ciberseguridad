<?php 


    include 'conexion.php';

    $nombre_completo = $_POST["nombre_completo"];
    $correo = $_POST["correo"];
    $usuarios = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    //variable para incriptar contraseña en mysql o base de datos 
    $contrasena = hash('sha512', $contrasena);


    $query = "INSERT INTO usuarios (nombre_completo,correo_electronico,usuario,contrasena) 
    VALUES ('$nombre_completo','$correo','$usuarios','$contrasena')";


    //verificar si el correo se repite en la base de datos
    
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo_electronico='$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        
        <script>
                 alert("Este correo ya esta reguistrado, intenta con otro difernte");
                 window.location = "../loguin.php";
        </script>

        ';
//un codigo para terminar el codigo y no se repita lo demas 
        exit();

    }
//verificar si el usuario se repite 
    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuarios'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        
        <script>
                 alert("Este usuario ya esta reguistrado, intenta con otro difernte");
                 window.location = "../loguin.php";
        </script>

        ';
//un codigo para terminar el codigo y no se repita lo demas 
        exit();

    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
               <script>
                         alert("Usuario almacenado exitozamente");
                         window.location = "../loguin.php";
               </script>
        ';
    } else {
    echo '
           <script>
                     alert("Intentalo de nuevo usuario almacenado");
                     window.location = "../loguin.php";
           </script>
    ';
}


    /*$ejecutar = mysqli_query($conexion, $query);

     */
/** serando coneccion */
    mysqli_close($conexion);

?>