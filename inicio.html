<?php
// Conexión y consulta para obtener artículos
require_once('db.php');
$query = "SELECT id, nombre, url_imagen FROM articulos";
$resultado = ObtenerRegistros($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoonPartyEvents</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="imagenes/favicon.ico" type="image/x-icon">
<style>
    body {
        background: linear-gradient(to bottom right, #9d91ff, rgba(255, 255, 255, 0.7));
        font-family: 'Arial', sans-serif;
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #particles-js {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .main-container {
        width: 100%;
        max-width: 1200px;
        z-index: 1;
        padding: 30px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        margin-top: 20px;
    }

    .main-content {
        padding: 20px;
        text-align: center;
    }

    .category-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    .card {
        border: none;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .card-body {
        padding: 15px;
        background: linear-gradient(135deg, #ffffff 30%, #f2f2f2);
        text-align: center;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
    }

    .card-title {
        font-size: 1.1rem;
        font-weight: bold;
        color: #333;
    }

    footer {
        background-color: #9d91ff;
        color: white;
        text-align: center;
        padding: 10px 0;
        width: 100%;
    }

    .section-header {
        font-size: 2rem;
        color: #5a5a5a;
        margin-bottom: 30px;
        font-weight: bold;
        letter-spacing: 1px;
    }
</style>


</head>
<body>

<div id="particles-js"></div>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="inicio.html">
            <img src="imagenes/Logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="rentaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Renta para fiestas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="rentaDropdown">
                        <a class="dropdown-item" href="renta_inflables.html">Renta de Inflables</a>
                        <a class="dropdown-item" href="renta_brincos.html">Renta de Brincolines</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="rentaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Renta de mobiliario
                    </a>
                    <div class="dropdown-menu" aria-labelledby="rentaDropdown">
                        <a class="dropdown-item" href="renta.html">Renta de sillas</a>
                        <a class="dropdown-item" href="renta_brincos.html">Renta de mesas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="rentaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicio de catering
                    </a>
                    <div class="dropdown-menu" aria-labelledby="rentaDropdown">
                        <a class="dropdown-item" href="renta.html">Comidas</a>
                        <a class="dropdown-item" href="renta_brincos.html">Postres y repostería</a>                  
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.html">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informacion.php">Información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.html" style="font-weight: bold;">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Registro.html" style="font-weight: bold;">Registrarse</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido principal -->
<div class="container mt-5 main-container">
    <div class="main-content">
        <h1 class="section-header">¡Alquiler para fiestas y eventos de entretenimiento garantizado!</h1>
        <p class="text-center text-muted">Contamos con una amplia gama de productos para el entretenimiento de tu fiesta. ¡Nos dedicamos a que tu evento sea inolvidable!</p>

        <!-- Sección de categorías -->
        <div class="row">
            <?php foreach ($resultado as $articulo): ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <a href="detalle.php?id=<?= htmlspecialchars($articulo['id']) ?>"> <!-- Enlace a la página de detalle -->
                            <img src="imagenes/<?= htmlspecialchars($articulo['url_imagen']) ?>" class="card-img-top category-image" alt="<?= htmlspecialchars($articulo['nombre']) ?>">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($articulo['nombre']) ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<footer class="text-center mt-5">
    <p>&copy; 2024 MoonPartyEvents. Todos los derechos reservados.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Incluir Particles.js -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles-js", {
        particles: {
            number: { value: 50, density: { enable: true, value_area: 800 } },
            color: { value: "#ffcc00" },
            shape: {
                type: ["circle", "edge"],
                stroke: { width: 0, color: "#000" },
                polygon: { nb_sides: 5 },
            },
            opacity: { value: 0.5, random: false, anim: { enable: false } },
            size: { value: 20, random: true, anim: { enable: false } },
            line_linked: {
                enable: true,
                distance: 150,
                color: "#ffffff",
                opacity: 0.4,
                width: 1,
            },
            move: {
                enable: true,
                speed: 6,
                direction: "none",
                random: false,
                straight: false,
                out_mode: "out",
                bounce: false,
                attract: { enable: false, rotateX: 600, rotateY: 1200 },
            },
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: { enable: true, mode: "repulse" },
                onclick: { enable: true, mode: "push" },
                resize: true,
            },
            modes: {
                grab: { distance: 400, line_linked: { opacity: 1 } },
                bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
                repulse: { distance: 200, duration: 0.4 },
                push: { particles_nb: 4 },
                remove: { particles_nb: 2 },
            },
        },
        retina_detect: true,
    });
</script>
</body>
</html>
