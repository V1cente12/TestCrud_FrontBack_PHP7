<?php
$servername = "localhost";
$database = "crud";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion']; // Corrected variable name
$precio = $_POST['precio'];

//insertar registro en productos
$sql = "INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";

if ($conn->query($sql) === true) {
    echo "producto registrado exitosamente";
    header("location: paginaprincipal.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>
