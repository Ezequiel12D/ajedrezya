<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Sitio de Ajedrez</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
        <div class="auth-buttons">
            <a href="register.php" class="auth-button">Registrarse</a>
            <a href="login.php" class="auth-button">Iniciar Sesión</a>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Bienvenido a AjedrezYA!</h1>
            <p>El lugar donde los amantes del ajedrez se encuentran.</p>
            <button>Descarga ahora</button>
        </div>
    </section>

    <section class="features">
        <h2>¿Qué Ofrecemos?</h2>
        <div class="feature-grid">
            <div class="feature">
                <i class="icon-tutorial"></i>
                <h3>Tutoriales Interactivos</h3>
                <p>Aprenda ajedrez desde lo básico hasta lo avanzado.</p>
            </div>
            <div class="feature">
                <i class="icon-news"></i>
                <h3>Noticias Actualizadas</h3>
                <p>Manténgase al día con las últimas noticias y eventos de ajedrez.</p>
            </div>
            <div class="feature">
                <i class="icon-community"></i>
                <h3>Comunidad Activa</h3>
                <p>Conéctese con otros entusiastas del ajedrez.</p>
            </div>
        </div>
    </section>

    <section class="news">
        <h2>Últimas Noticias</h2>
        <div class="news-grid">
            <div class="news-article">
                <h3>Título de Noticia</h3>
                <p>Resumen de la noticia...</p>
                <a href="#">Leer Más</a>
            </div>
            <div class="news-article">
                <h3>Título de Noticia</h3>
                <p>Resumen de la noticia...</p>
                <a href="#">Leer Más</a>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h2>Lo Que Dicen Nuestros Usuarios</h2>
        <div class="testimonial-grid">
            <div class="testimonial">
                <p>"Este sitio es increíble para aprender y mejorar mi ajedrez."</p>
                <p>- Usuario Satisfecho</p>
            </div>
            <div class="testimonial">
                <p>"Los torneos en línea son muy competitivos y divertidos."</p>
                <p>- Otro Usuario</p>
            </div>
        </div>
    </section>

    <div class="community">
        <h2>Únase a Nuestra Comunidad</h2>
        <p>Conéctese con otros jugadores, participe en discusiones y más.</p>
    </div>

    <<footer>
        <div class="footer-content">
            <div class="footer-section footer-about">
                <h3>About Us</h3>
                <p>Somos una organización dedicada a promover el ajedrez a nivel mundial, ofreciendo recursos y
                    herramientas para jugadores de todos los niveles.</p>
            </div>
            <div class="footer-section footer-contact">
                <h3>Contacto</h3>
                <p><i class="fas fa-map-marker-alt"></i> Calle Falsa 123, Ciudad, País</p>
                <p><i class="fas fa-phone-alt"></i> +123 456 789</p>
                <p><i class="fas fa-envelope"></i> info@example.com</p>
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