<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// El resto de tu código para registrar.php va aquí

// 1. Datos de conexión a la base de datos
// **¡REEMPLAZA ESTOS DATOS CON LOS TUYOS!**
define('DB_SERVER', 'sql302.infinityfree.com');
define('DB_USERNAME', 'if0_39768725');
define('DB_PASSWORD', 'edFQkjDkBH'); // REEMPLAZA CON LA CONTRASEÑA QUE ELEGISTE
define('DB_NAME', 'if0_39768725_usuarios');

// 2. Conexión a la base de datos
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// 3. Obtener los datos del formulario
// Usamos $_POST para obtener los datos enviados por el formulario
$username = $_POST['username'];
$password = $_POST['password'];

// 4. Encriptar la contraseña (¡muy importante por seguridad!)
// Usamos la función password_hash para encriptar la contraseña
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 5. Preparar la consulta SQL para insertar los datos
// Usamos consultas preparadas para evitar inyecciones SQL y hacer el código más seguro
$sql = "INSERT INTO usuarios (nombre_usuario, contraseña) VALUES (?, ?)";

$stmt = $conn->prepare($sql);

// 6. Enlazar los parámetros y ejecutar la consulta
// "ss" significa que los dos parámetros son de tipo string (cadena de texto)
$stmt->bind_param("ss", $username, $hashed_password);

if ($stmt->execute()) {
    echo "¡Registro exitoso!";
    // Aquí puedes redirigir al usuario a una página de éxito
    // header("Location: exito.html");
} else {
    echo "Error: " . $stmt->error;
}

// 7. Cerrar la conexión
$stmt->close();
$conn->close();

?>