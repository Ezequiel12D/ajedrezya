<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajedrezya";

$conn = new mysqli($servername, $username, $password, 'ajedrezya');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM usuarios WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            echo "<script>
                    alert('Inicio de sesión exitoso. Bienvenido, " . $row['username'] . "');
                    window.location.href = '../views/home.php';
                  </script>";
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "No se encontró el usuario";
    }

    $conn->close();
}
?>