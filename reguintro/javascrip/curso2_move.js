function toggleMenu(id) {
    var menu = document.getElementById(id);
    menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
}

function mostrarModulo(id) {
    // Ocultar todos los módulos
    document.querySelectorAll('.modulo').forEach(div => div.style.display = 'none');
    // Mostrar el módulo específico
    document.getElementById(id).style.display = 'block';
}