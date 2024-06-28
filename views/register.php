<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro en Página de Ajedrez</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333;
            text-align: center;
            position: relative;
        }

        h2 {
            color: #4CAF50;
            font-size: 28px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .chessboard {
            display: inline-block;
            margin-bottom: 20px;
        }

        .chessboard-row {
            display: flex;
        }

        .chessboard-square {
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: #333;
        }

        .chessboard-square:nth-child(even) {
            background-color: #f0d9b5;
        }

        .chessboard-square:nth-child(odd) {
            background-color: #b58863;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
            text-align: left;
            width: 100%;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #4CAF50;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #777;
            font-size: 18px;
        }

        .password-toggle:hover {
            color: #333;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }

        .footer-text a {
            color: #4CAF50;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="chessboard">
            <!-- Tablero de Ajedrez (ejemplo) -->
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
            <!-- Agrega más filas según sea necesario -->
        </div>
        <h2>Registro en Página de Ajedrez</h2>
        <form action="procesar_registro.php" method="post">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>


            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>


            <label for="password">Contraseña:</label>
            <div style="position: relative;">
                <input type="password" id="password" name="password" required>
                <span class="password-toggle" onclick="togglePassword()">&#x1f441;</span>
            </div>


            <input type="submit" value="Registrarse">


            <div class="footer-text">
                ¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a>
            </div>
        </form>
    </div>


    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var passwordToggle = document.querySelector(".password-toggle");


            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordToggle.innerHTML = "&#x1f440;"; // Icono de ojo abierto
            } else {
                passwordField.type = "password";
                passwordToggle.innerHTML = "&#x1f441;"; // Icono de ojo cerrado
            }
        }
    </script>
</body>

</html>