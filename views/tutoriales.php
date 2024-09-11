<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriales</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">AjedrezYa!</div>
        <nav>
            <ul>
                <li><a href="home.php">Inicio</a></li>
                <li><a href="tutoriales.php">Tutoriales</a></li>
                <li><a href="noticias.php">Noticias</a></li>
                <li><a href="comunidad.php">Comunidad</a></li>
            </ul>
        </nav>
        <?php if (!isset($_SESSION['username'])): ?>
            <div class="auth-buttons">
                <a href="register.php" class="auth-button">Registrarse</a>
                <a href="login.php" class="auth-button">Iniciar Sesión</a>
            </div>
        <?php else: ?>
            <div class="auth-buttons">
                <a href="../includes/logout.php" class="auth-button">Cerrar Sesión</a>
            </div>
        <?php endif; ?>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Bienvenido a los Tutoriales</h1>
                <p>Aprenda ajedrez desde lo básico hasta lo avanzado.</p>
            </div>
        </section>

        <section class="content">
            <h2>Tutoriales Interactivos</h2>
            <p>En esta sección encontrarás tutoriales para mejorar tu juego.</p>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/7es3ucBXOcs?si=ZH9vy59kl2IKs6nw" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <p>Este es un tutorial basico de como jugar</p>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/wsicb6FuC24?si=Ss6YmAY8iet0xO_t" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <p>Algunos consejos para el juego</p>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section footer-about">
                <h3>Quienes somos?</h3>
                <p>Somos una organización dedicada a promover el ajedrez a nivel mundial, ofreciendo recursos y
                    herramientas para jugadores de todos los niveles.</p>
            </div>
            <div class="footer-section footer-contact">
                <h3>Contacto</h3>
                <p><i class="fas fa-envelope"></i>ajedrezya@gmail.com</p>
            </div>
            <div class="footer-section footer-social">
                <h3>Seguinos en:</h3>
                <br>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <br>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Chess Organization. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>