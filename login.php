<?php
session_start();

// 1. Datos de conexión a la base de datos
// **RECUERDA: La contraseña la debes poner tú**
define('DB_SERVER', 'sql302.infinityfree.com');
define('DB_USERNAME', 'if0_39768725');
define('DB_PASSWORD', 'edFQkjDkBH');
define('DB_NAME', 'if0_39768725_usuarios');

// 2. Conexión a la base de datos
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// 3. Procesar los datos del formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 4. Buscar al usuario en la base de datos
    $sql = "SELECT id, nombre_usuario, contraseña FROM usuarios WHERE nombre_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $db_username, $hashed_password);
        $stmt->fetch();

        // 5. Verificar la contraseña
        if (password_verify($password, $hashed_password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $db_username;
            
            header("location: panel.php");
        } else {
            echo "Contraseña incorrecta. Por favor, inténtelo de nuevo.";
        }
    } else {
        echo "Nombre de usuario no encontrado.";
    }

    $stmt->close();
}

$conn->close();
?>