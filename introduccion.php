<!-- filepath: /c:/xampp/htdocs/creacion_loguin_registro_de_usuario/introduccion.php -->
<?php
session_start();

if(!isset($_SESSION['usuarios'])){
    echo'
        <script>
            alert("Por favor debes iniciar sesion");
            window.location = "loguin.php";
        </script>
    ';

    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Educación Ciberseguridad</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Playfair Display', serif;
        }
        .bg-gradient-blue {
            background: #4b6cb7;
            background: -webkit-linear-gradient(to right, #182848, #4b6cb7);
            background: linear-gradient(to right, #182848, #4b6cb7);
            align-items: center;
            justify-content: center;
            background-position: center;
        }
    </style>
</head>
<body class="bg-black text-white">
    <header class="flex justify-between items-center p-6 bg-gradient-blue">
        <div class="text-2xl font-bold text-white">
            EDUCACIÓN CIBERSEGURIDAD
        </div>
        <nav class="space-x-6">
            <a class="text-white hover:text-blue-400" href="#bsq-curs">Curso</a>
            <a class="text-white hover:text-blue-400" href="menu-introduccion/juegos_interactivos.php">Juegos interactivos</a>
            <a class="text-white hover:text-blue-400" href="ia/tips/tips.html">Tips</a>
            <a class="text-white hover:text-blue-400" href="menu-introduccion/Soporte.html">Soporte</a>
        </nav>
        <div class="space-x-4">
            <a class="text-white hover:text-blue-400" href="#"><i class="fab fa-instagram"></i></a>
            <a class="text-white hover:text-blue-400" href="#"><i class="fab fa-facebook"></i></a>
        </div>
    </header>
    
    <main class="flex flex-col items-center justify-center h-screen text-center relative">
        <img src="reguintro/img/l_1.jpeg" alt="" class="absolute inset-0 w-full h-full object-cover opacity-50"/>
        <div class="relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
                EDUCACIÓN CIBERSEGURIDAD
            </h1>
        </div>
    </main>
    
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-2/3">
                <h1 class="text-5xl font-light text-blue-400 mb-4">Ciberseguridad</h1>
                <p class="text-lg text-white mb-2">En el mundo digital, cada empresa es una empresa de tecnología.</p>
                <p class="text-lg text-white mb-2">Con ciberataques previstos cada 2 segundos para 2031 y la necesidad global de expertos en ciberseguridad, es clave priorizar este campo.</p>
            </div>
            <div class="lg:w-1/3 mt-8 lg:mt-0 lg:ml-8">
                <img src="reguintro/img/i_1.jpeg" alt="Persona trabajando en un servidor de red" class="rounded-lg"/>
            </div>
        </div>
    </div>
    <!-- Cursos de Ciberseguridad -->   
    <div class="bg-gradient-blue py-8" id="bsq-curs">
        <h2 class="text-4xl text-center text-white font-light mb-4">Cursos de Ciberseguridad</h2>
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Curso 1 -->
                <a href="curso_1.html" class="block">
                <div class="bg-black rounded-lg shadow-md overflow-hidden">
                    <img alt="Persona usando un dispositivo" class="w-full h-48 object-cover" src="https://storage.googleapis.com/a1aa/image/o-XI88rmFToQz83L-8qseSbxwY1bOnyp8QTjdh25V0A.jpg"/>
                    <div class="p-4">
                        <span class="bg-blue-400 text-black text-xs font-bold px-2 py-1 rounded">PHISHING</span>
                        <h2 class="text-lg font-bold text-white mt-2">Introducción a Ciberseguridad</h2>
                    </div>
                </div>
                  <!-- Curso 2 -->
                  <a href="curso_2.html" class="block">
                <div class="bg-black rounded-lg shadow-md overflow-hidden">
                    <img alt="Escudo digital representando ciberseguridad" class="w-full h-48 object-cover" src="https://storage.googleapis.com/a1aa/image/2KMLOzICg_CVCzJHoapJzGerLFynOE13c6-_YG_ocGE.jpg"/>
                    <div class="p-4">
                        <span class="bg-blue-400 text-black text-xs font-bold px-2 py-1 rounded">VPN</span>
                        <h2 class="text-lg font-bold text-white mt-2">Curso de VPN</h2>
                    </div>
                </div>
                <!-- Curso 3 -->
                <a href="hacker-etico.html" class="block">
                <div class="bg-black rounded-lg shadow-md overflow-hidden">
                    <img alt="Hacker ético trabajando" class="w-full h-48 object-cover" src="https://storage.googleapis.com/a1aa/image/BHaOjtUgUYjLDEqZ0W3UyVhYOskcJrngcLBWCFFVBUs.jpg"/>
                    <div class="p-4">
                        <span class="bg-blue-400 text-black text-xs font-bold px-2 py-1 rounded">HERROR HUMANO </span>
                        <h2 class="text-lg font-bold text-white mt-2">Hacker Ético</h2>
                    </div>
                </div>
                <!-- Curso 4 -->
                <a href="cyberops-associate.html" class="block">
                <div class="bg-black rounded-lg shadow-md overflow-hidden">
                    <img alt="Persona monitoreando seguridad" class="w-full h-48 object-cover" src="https://storage.googleapis.com/a1aa/image/D95qxuNUV_sg7ow1I-uKoqFA_CishkkcwhWID6eV5Ms.jpg"/>
                    <div class="p-4">
                        <span class="bg-blue-400 text-black text-xs font-bold px-2 py-1 rounded">INTERMEDIATE</span>
                        <h2 class="text-lg font-bold text-white mt-2">CyberOps Associate</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="bg-black text-white text-center p-4">
        <p>&copy; 2021 Educación Ciberseguridad. Todos los derechos reservados.</p>
    </footer>
</html>
