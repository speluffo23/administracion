<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario</title>
</head>
<body>
    <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
    <p>Este es el contenido de tu panel de usuario. ¡Solo tú puedes verlo!</p>
    <p><a href="logout.php">Cerrar Sesión</a></p>
</body>
</html>