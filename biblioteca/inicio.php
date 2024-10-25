<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamo de Libros - Biblioteca Universitaria</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlaza tu archivo CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Enlace a Font Awesome -->
</head>
<body>
    <header>
        <div class="logo">
            <img src="ruta/al/logo.png" alt= ut. />
        </div>
        <div class="titulo-navegacion">
            <h1>Biblioteca Universitaria</h1>
            <nav>
                <ul class="menu-navegacion">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#catalogo">Catálogo</a></li>
                    <li><a href="#prestamo">Préstamo y Renovación</a></li>
                    <li><a href="#reservas">Reservas</a></li>
                    <li><a href="#contacto">Contacto</a></li>

                    <!-- Campo de búsqueda -->
                    <li>
                        <input type="text" id="search" placeholder="Buscar libros..." />
                        <button id="search-button"><i class="fas fa-search"></i></button>
                    </li>

                    <!-- Íconos para usuarios no registrados -->
                    <li class="menu-no-registrado"><a href="#registro"><i class="fas fa-user-plus"></i> Registro</a></li> 
                    <li class="menu-no-registrado"><a href="#login"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a></li>

                    <!-- Íconos para usuarios registrados -->
                    <li class="menu-registrado" style="display: none;">
                        <a href="#perfil"><i class="fas fa-user"></i> Mi Perfil</a> 
                    </li>
                    <li class="menu-registrado" style="display: none;">
                        <a href="#logout"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a> 
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="inicio">
            <h2>Bienvenido a la Biblioteca</h2>
            <p>Información sobre nuestros servicios...</p>
        </section>

        <!-- Sección del catálogo -->
        <section id="catalogo">
            <h2>Catálogo de Libros</h2>
            <div class="filtros">
                <!-- Aquí puedes incluir filtros adicionales si lo deseas -->
            </div>
            <div class="libros" id="libros">
                <!-- Los libros se mostrarán aquí -->
                <!-- Ejemplo de libro -->
                <div class="libro" data-genero="ficcion" data-carrera="ingenieria">
                    <h3>El Nombre del Viento</h3>
                    <p>Autor: Patrick Rothfuss</p>
                </div>
                <!-- Agrega más libros con sus respectivos géneros y carreras -->
            </div>
        </section>

        <!-- Otras secciones aquí -->

        <!-- Sección para Registro (opcional) -->
        <section id="registro">
            <h2>Registro</h2>
            <!-- Formulario de registro aquí -->
        </section>

        <!-- Sección para Iniciar Sesión (opcional) -->
        <section id="login">
            <h2>Iniciar Sesión</h2>
            <!-- Formulario de inicio de sesión aquí -->
        </section>

        <!-- Sección para Mi Perfil (opcional) -->
        <section id="perfil">
            <h2>Mi Perfil</h2>
            <!-- Información del perfil aquí -->
        </section>

    </main>

    <footer>
        <p>&copy; 2024 Biblioteca Universitaria</p>
    </footer>

    <!-- Enlaza tu archivo JavaScript si es necesario -->
    <script src="user-status.js"></script> 
    <!-- Script para búsqueda -->
    <script src="search.js"></script> 
</body>
</html>