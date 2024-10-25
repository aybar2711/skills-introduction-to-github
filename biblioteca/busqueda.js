// search.js

document.getElementById('search-button').addEventListener('click', function() {
    const searchTerm = document.getElementById('search').value.toLowerCase();
    
    const libros = document.querySelectorAll('.libro');
    
    libros.forEach(libro => {
        const titulo = libro.querySelector('h3').innerText.toLowerCase();
        
        // Verifica si el título incluye el término de búsqueda
        if (titulo.includes(searchTerm)) {
            libro.style.display = 'block'; // Mostrar libro
        } else {
            libro.style.display = 'none'; // Ocultar libro
        }
    });
});