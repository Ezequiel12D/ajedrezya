<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Página de Ajedrez</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="login-container">
        <form action="login_process.php" method="post" class="login-form">
            <h2>Iniciar sesión</h2>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid'): ?>
                <p class="error-message">Usuario o contraseña incorrectos.</p>
            <?php endif; ?>
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Iniciar sesión</button>
        </form>
    </div>
</body>

</html>