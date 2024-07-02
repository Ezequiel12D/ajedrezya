<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión en Ajedrez YA!</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container">
        <div class="chessboard">
            <div class="chessboard-row">
                <div class="chessboard-square">♜</div>
                <div class="chessboard-square">♞</div>
                <div class="chessboard-square">♝</div>
                <div class="chessboard-square">♛</div>
                <div class="chessboard-square">♚</div>
                <div class="chessboard-square">♝</div>
                <div class="chessboard-square">♞</div>
                <div class="chessboard-square">♜</div>
            </div>
            <div class="chessboard-row">
                <div class="chessboard-square">♟︎</div>
                <div class="chessboard-square">♟︎</div>
                <div class="chessboard-square">♟︎</div>
                <div class="chessboard-square">♟︎</div>
                <div class="chessboard-square">♟︎</div>
                <div class="chessboard-square">♟︎</div>
                <div class="chessboard-square">♟︎</div>
                <div class="chessboard-square">♟︎</div>
            </div>
        </div>
        <h2>Iniciar Sesión en Ajedrez YA!</h2>
        <form action="../includes/procesar_login.php" method="post">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <div style="position: relative;">
                <input type="password" id="password" name="password" required>
                <span class="password-toggle" onclick="togglePassword()">&#x1f441;</span>
            </div>

            <input type="submit" value="Iniciar Sesión">

            <div class="footer-text">
                ¿No tienes una cuenta? <a href="register.php" class="link-button">Regístrate aquí</a>
            </div>
        </form>
    </div>

    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var passwordToggle = document.querySelector(".password-toggle");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordToggle.innerHTML = "&#x1f440;";
            } else {
                passwordField.type = "password";
                passwordToggle.innerHTML = "&#x1f441;";
            }
        }
    </script>
</body>

</html>