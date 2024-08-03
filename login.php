<?php
$servername = "localhost";
$database = "crud";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

//buscar registro ee usuqrio
$sql = "SELECT id, nombre FROM usuarios WHERE nombre = '$nombre' AND contrasena = '$contrasena' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    session_start();
    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nombre'] = $usuario['nombre'];
    header("location: paginaprincipal.php");
} else {
    echo 'las credenciales son incorrectas';
}

$conn->close();
?>
