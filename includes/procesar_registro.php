<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajedrezya";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validar longitud de la contraseña
    if (strlen($password) < 8 || strlen($password) > 64) {
        $_SESSION['error'] = "La contraseña debe tener entre 8 y 64 caracteres.";
        header("Location: ../views/register.php");
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $username; // Establecer la sesión del usuario
        $_SESSION['user_created'] = true; // Establecer una bandera para indicar que el usuario se ha creado
        header("Location: ../views/home.php"); // Redirigir a home.php
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
