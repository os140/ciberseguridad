<?

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos interactivos</title>
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
            JUEGOS INTERACTIVOS
        </div>
        <nav class="space-x-6">
            <a class="text-white hover:text-blue-400" href="../introduccion.php">Inicio</a>
            <a class="text-white hover:text-blue-400" href="#bsq-curs">juegos interactivos</a>
            <a class="text-white hover:text-blue-400" href="#">Tips</a>
            <a class="text-white hover:text-blue-400" href="soporte.html">Soporte</a>
            
        </nav>
        <div class="space-x-4">
            <a class="text-white hover:text-blue-400" href="#"><i class="fab fa-instagram"></i></a>
            <a class="text-white hover:text-blue-400" href="#"><i class="fab fa-facebook"></i></a>
        </div>
    </header>
    
    <main class="flex flex-col items-center justify-center h-screen text-center relative">
        <img src="https://techformacion.net/wp-content/uploads/escenario-futurista-ciberseguridad-educativa.webp" alt="" class="absolute inset-0 w-full h-full object-cover opacity-50"/>
        <div class="relative z-10">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
                JUEGOS INTERACTIVOS 
            </h1>
        </div>
    </main>
    
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-2/3">
                <h1 class="text-5xl font-light text-blue-400 mb-4">JUEGOS</h1>
                <p class="text-lg text-white mb-2">El usuario interectuara con unas preguntas </p>
                <p class="text-lg text-white mb-2">y retroalimentara lo visto en los cuersos ya dados en el apartado de cuerso de la pagina.</p>
            </div>
            <div class="lg:w-1/3 mt-8 lg:mt-0 lg:ml-8">
                <img src="https://th.bing.com/th/id/OIP.Si_rSQPlHW_Don7QmjCJpwHaEz?rs=1&pid=ImgDetMain" alt="Persona trabajando en un servidor de red" class="rounded-lg"/>
            </div>
        </div>
    </div>
    <!-- Cursos de Ciberseguridad -->   
    <div class="bg-gradient-blue text-center  items-center py-8 " id="bsq-curs">
        <h2 class="text-4xl text-center text-white font-light mb-4">Juegos interactivos</h2>
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1  items-center md:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Curso 1 -->
                <a href="https://kahoot.it/challenge/06877166?challenge-id=066b0428-7dff-4d31-b2dc-e57d87cdb860_1741212429050" class="block">
                <div class="bg-black rounded-lg shadow-md overflow-hidden">
                    <img alt="Persona usando un dispositivo" class="w-full h-48 object-cover" src="https://www.csoonline.com/wp-content/uploads/2023/06/phishing_attack_security_threat_fish_hook_binary_code_by_andreus_gettyimages-1253294358_cso_2400x1600-100851297-orig.jpg?quality=50&strip=all"/>
                    <div class="p-4">
                        <span class="bg-blue-400 text-black text-xs font-bold px-2 py-1 rounded">phishing</span>
                        <h2 class="text-lg font-bold text-white mt-2"> juego interactivo te ayuda a repasar algunas cosas vistas en el curso de fishing </h2>
                    </div>
                </div>
                  <!-- Curso 2 -->
                  <a href="https://kahoot.it/challenge/04676234?challenge-id=066b0428-7dff-4d31-b2dc-e57d87cdb860_1741209798126" class="block">
                <div class="bg-black rounded-lg shadow-md overflow-hidden">
                    <img alt="Escudo digital representando ciberseguridad" class="w-full h-48 object-cover" src="https://th.bing.com/th/id/R.5904113026c98f83b3575910eb85b8de?rik=WxACrEFaAuChyg&pid=ImgRaw&r=0"/>
                    <div class="p-4">
                        <span class="bg-blue-400 text-black text-xs font-bold px-2 py-1 rounded">VPN</span>
                        <h2 class="text-lg font-bold text-white mt-2">juego interactivo de repaso de algunos datos importantes del curso de vpn</h2>
                    </div>
                </div>
                <!-- Curso 3 -->
                <a href="https://kahoot.it/challenge/04045789?challenge-id=066b0428-7dff-4d31-b2dc-e57d87cdb860_1741072937047" class="block">
                <div class="bg-black rounded-lg shadow-md overflow-hidden">
                    <img alt="Hacker ético trabajando" class="w-full h-48 object-cover" src="https://th.bing.com/th/id/OIP.QcMlBldJMZsYOhqGs8wa_QHaE8?rs=1&pid=ImgDetMain"/>
                    <div class="p-4">
                        <span class="bg-blue-400 text-black text-xs font-bold px-2 py-1 rounded">error en la capa 8 errores humanos </span>
                        <h2 class="text-lg font-bold text-white mt-2">juego interactivo de repaso de los errores humanos error en la capa 8</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>

   
</body>
</html>