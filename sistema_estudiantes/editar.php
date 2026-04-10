<?php
include("conexion.php");

$id = $_GET['id'];

$resultado = $conexion->query("SELECT * FROM estudiantes WHERE id=$id");
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Datos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2>Editar Datos</h2>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

    <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required><br>
    <input type="number" name="edad" value="<?php echo $fila['edad']; ?>" required><br>
    <input type="text" name="carrera" value="<?php echo $fila['carrera']; ?>" required><br>
    <input type="email" name="correo" value="<?php echo $fila['correo']; ?>" required><br>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="dashboard.php">← Volver</a>

</body>
</html>