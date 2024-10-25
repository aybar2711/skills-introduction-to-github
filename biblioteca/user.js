// user-status.js

// Simulamos que el usuario está registrado o no
let isLoggedIn = false; // Cambia esto a true si el usuario está registrado

function updateMenu() {
    const menuNoRegistrado = document.querySelectorAll('.menu-no-registrado');
    const menuRegistrado = document.querySelectorAll('.menu-registrado');

    if (isLoggedIn) {
        menuNoRegistrado.forEach(item => item.style.display = 'none'); // Ocultar menú no registrado
        menuRegistrado.forEach(item => item.style.display = 'inline-block'); // Mostrar menú registrado
    } else {
        menuNoRegistrado.forEach(item => item.style.display = 'inline-block'); // Mostrar menú no registrado
        menuRegistrado.forEach(item => item.style.display = 'none'); // Ocultar menú registrado
    }
}

// Llama a la función al cargar la página
updateMenu();