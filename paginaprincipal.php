<?php
$servername = "localhost";
$database = "crud";
$username = "root";
$password = "";
$conexion = mysqli_connect($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$sql = "SELECT id, nombre, descripcion, precio FROM productos ";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>
    <h1>Bienvenido</h1>
    <h2>Listado de Productos</h2>
    <table class="table">
      <thead>
      <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Accion</th>
            <th>Accion</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['descripcion'] . "</td>";
            echo "<td>" . $fila['precio'] . "</td>";
            echo "<td>" . "<a href='editar_producto.php?id=".$fila['id']."'>editar</a>" . "</td>";
            echo "<td>" . "<a href='eliminar_producto.php?id=".$fila['id']."'>eliminar</a>". "</td>";
            echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <a href="formulario.php">Agregar Nuevo Producto</a>
</body>
</html>

