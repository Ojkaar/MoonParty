<?php
require_once('db.php'); // Asegúrate de incluir la conexión

// Verifica si hay un ID en la URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM articulos WHERE id = $id"; // Asegúrate de que 'id' existe
    $resultado = ObtenerRegistros($query);
} else {
    // Manejo de errores si no hay ID
    die("No se especificó ningún ID.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Artículo - MoonPartyEvents</title>
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

        header {
            width: 100%;
            background-color: #9d91ff;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .main-container {
            width: 100%;
            max-width: 800px;
            z-index: 1;
            padding: 30px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        .article-content {
            padding: 20px;
            text-align: center;
        }

        .article-image {
            width: 60%;
            height: auto;
            max-height: 550px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        h1, h2 {
            color: #333;
        }

        p {
            font-size: 1rem;
            color: #666;
        }

        footer {
            background-color: #9d91ff;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: relative;
            bottom: 0;
        }
    </style>
</head>
<body>

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
                    <a class="nav-link dropdown-toggle" href="#" id="mobiliarioDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Renta de mobiliario
                    </a>
                    <div class="dropdown-menu" aria-labelledby="mobiliarioDropdown">
                        <a class="dropdown-item" href="renta.html">Renta de sillas</a>
                        <a class="dropdown-item" href="renta_brincos.html">Renta de mesas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="cateringDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicio de catering
                    </a>
                    <div class="dropdown-menu" aria-labelledby="cateringDropdown">
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

<header>Detalle del Artículo</header>

<div id="particles-js"></div>

<div class="container mt-5 main-container">
    <div class="article-content">
        <?php if ($resultado): ?>
            <h2><?= htmlspecialchars($resultado[0]['nombre']) ?></h2>
            <img src="imagenes/<?= htmlspecialchars($resultado[0]['url_imagen']) ?>" alt="<?= htmlspecialchars($resultado[0]['nombre']) ?>" class="img-fluid article-image">
            <p>Descripción del artículo...</p> <!-- Agrega más detalles según sea necesario -->
        <?php else: ?>
            <p>No se encontró el artículo.</p>
        <?php endif; ?>
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
