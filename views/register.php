<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro en Página de Ajedrez</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5dc;
            /* Beige */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            /* Blanco */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333333;
            /* Negro */
            text-align: center;
            position: relative;
        }

        h2 {
            color: #333333;
            /* Negro */
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
            color: #333333;
            /* Negro */
        }

        .chessboard-square:nth-child(even) {
            background-color: #f5f5dc;
            /* Beige */
        }

        .chessboard-square:nth-child(odd) {
            background-color: #333333;
            /* Negro */
            color: #ffffff;
            /* Blanco */
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
            color: #333333;
            /* Negro */
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
            border-color: #333333;
            /* Negro */
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
            color: #333333;
            /* Negro */
        }

        input[type="submit"] {
            background-color: #8b4513;
            /* Marrón oscuro */
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
            background-color: #d2b48c;
            /* Marrón claro */
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            /* Ajusta este valor según sea necesario */
            color: #333333;
            /* Cambiado a negro para mayor contraste */
        }

        .footer-text a {
            color: #8b4513;
            /* Color marrón oscuro */
            text-decoration: underline;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
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
                passwordToggle.innerHTML = "&#x1f440;";
            } else {
                passwordField.type = "password";
                passwordToggle.innerHTML = "&#x1f441;";
            }
        }
    </script>
</body>

</html>