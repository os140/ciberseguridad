function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const isOpen = sidebar.style.left === "0px";
    
    sidebar.style.left = isOpen ? "-250px" : "0px"; // Ocultar o mostrar barra
}