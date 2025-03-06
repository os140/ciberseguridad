<?php 
session_start();
if (isset($_SESSION['usuario'])) {
    header("location: introduccion.php");
    
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reguintro/css/estilos.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

    <main>
        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="iniciar_sesion">Iniciar Sesión</button>
                </div>
                <div class="caja_trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="registrarse">Regístrarse</button>
                </div>
            </div>

        

            <div class="contenedor_login-register">
                <!--loguin-->
                <form action="php/login_validar_usuario.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>

                    <div class="mb-3">
                    <div class="g-recaptcha" data-sitekey="6LcqAusqAAAAAHm8tMem0QTBiyO6qrkZupYXWWM2">
                    </div>
                    </div>

                    <button type="submit">Entrar</button>
                </form>

                 <!--Register--> 
                <form action="php/registro_usuario.php" method="POST" class="formulario_register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button type="submit">Regístrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="reguintro/javascrip/javascrip.js"></script>
</body>
</html>


