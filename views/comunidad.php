<?php
session_start();
include ('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['eliminar']) && isset($_POST['mensaje_id'])) {
        $mensaje_id = (int) $_POST['mensaje_id'];

        $stmt = $conn->prepare("DELETE FROM foro WHERE id = ? OR parent_id = ?");
        $stmt->bind_param("ii", $mensaje_id, $mensaje_id);
        $stmt->execute();
        $stmt->close();

        header("Location: comunidad.php");
        exit();
    } else {
        $usuario = $_SESSION['username'] ?? 'Anónimo';
        $mensaje = trim($_POST['mensaje']);
        $parent_id = isset($_POST['parent_id']) ? (int) $_POST['parent_id'] : null;

        if (!empty($mensaje)) {
            $stmt = $conn->prepare("INSERT INTO foro (usuario, mensaje, parent_id) VALUES (?, ?, ?)");
            $stmt->bind_param("ssi", $usuario, $mensaje, $parent_id);
            $stmt->execute();
            $stmt->close();

            header("Location: comunidad.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidad</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        .foro-mensajes {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .foro-mensajes .mensaje {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            background-color: #f9f9f9;
            position: relative;
        }

        .foro-mensajes .mensaje .usuario {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .foro-mensajes .mensaje .fecha {
            font-size: 0.9em;
            color: #888;
            margin-bottom: 10px;
        }

        .foro-mensajes .mensaje .contenido {
            margin-bottom: 10px;
        }

        .foro-mensajes .mensaje .respuesta-form {
            display: none;
            margin-top: 10px;
        }

        .foro-mensajes .mensaje .mostrar-respuestas {
            cursor: pointer;
            color: #007bff;
            text-decoration: underline;
            display: block;
            margin-top: 10px;
        }

        .foro-mensajes .mensaje .respuestas {
            margin-left: 20px;
            border-left: 2px solid #ddd;
            padding-left: 10px;
            display: none;
        }

        .foro-mensajes .mensaje textarea {
            width: 100%;
            margin-top: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .foro-mensajes .mensaje button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #8b4513;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .foro-mensajes .mensaje button:hover {
            background-color: #d2b48c;
            transform: scale(1.05);
        }

        .foro-mensajes .mensaje .responder-boton {
            background-color: #8b4513;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .foro-mensajes .mensaje .responder-boton:hover {
            background-color: #8b4513;
        }

        .foro-mensajes .mensaje .eliminar-boton {
            background-color: #dc3545;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 10px;
        }

        .foro-mensajes .mensaje .eliminar-boton:hover {
            background-color: #c82333;
        }
    </style>
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
                <h1>Bienvenido a nuestra comunidad</h1>
                <p>Aca podra debatir con otros jugadores.</p>
            </div>
        </section>

        <section class="content">
            <h2>Comunidad Activa</h2>
            <p>En esta sección encontrara el foro de AjedrezYa!.</p>

            <?php if (isset($_SESSION['username'])): ?>
                <form method="post" action="">
                    <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
                    <input type="hidden" name="parent_id" value="0">
                    <button type="submit">Publicar</button>
                </form>
            <?php else: ?>
                <p>Debes <a href="login.php">iniciar sesión</a> para publicar en el foro.</p>
            <?php endif; ?>

            <div class="foro-mensajes">
                <?php
                function displayMessages($parent_id = 0, $level = 0)
                {
                    global $conn;
                    $stmt = $conn->prepare("SELECT * FROM foro WHERE parent_id = ? ORDER BY fecha DESC");
                    $stmt->bind_param("i", $parent_id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='mensaje'>";
                        echo "<p class='usuario'>" . htmlspecialchars($row['usuario']) . "</p>";
                        echo "<p class='fecha'>" . $row['fecha'] . "</p>";
                        echo "<p class='contenido'>" . htmlspecialchars($row['mensaje']) . "</p>";

                        if (isset($_SESSION['username']) && $_SESSION['username'] == $row['usuario']) {
                            echo "<button class='responder-boton' onclick='toggleRespuestaForm(this)'>Responder</button>";
                            echo "<form method='post' action='' class='respuesta-form'>";
                            echo "<textarea name='mensaje' placeholder='Responde a este mensaje...' required></textarea>";
                            echo "<input type='hidden' name='parent_id' value='" . $row['id'] . "'>";
                            echo "<button type='submit'>Enviar</button>";
                            echo "</form>";
                            echo "<form method='post' action='' style='display:inline;'>";
                            echo "<input type='hidden' name='mensaje_id' value='" . $row['id'] . "'>";
                            echo "<button type='submit' name='eliminar' class='eliminar-boton'>Eliminar</button>";
                            echo "</form>";
                        }

                        echo "<span class='mostrar-respuestas' onclick='toggleRespuestas(this)'>Mostrar respuestas</span>";
                        echo "<div class='respuestas'>";
                        displayMessages($row['id'], $level + 1);
                        echo "</div>";
                        echo "</div>";
                    }

                    $stmt->close();
                }

                displayMessages();
                ?>
            </div>
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

    <script>
        function toggleRespuestas(element) {
            var respuestas = element.nextElementSibling;
            if (respuestas.style.display === 'none' || respuestas.style.display === '') {
                respuestas.style.display = 'block';
                element.textContent = 'Ocultar respuestas';
            } else {
                respuestas.style.display = 'none';
                element.textContent = 'Mostrar respuestas';
            }
        }

        function toggleRespuestaForm(button) {
            var form = button.nextElementSibling;
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }
    </script>
</body>

</html>