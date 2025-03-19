<?php

include 'conection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM empleados WHERE ID = $id";
    $result = mysqli_query($conexion, $query);
    $empleado = mysqli_fetch_assoc($result);
}

if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $salario = $_POST['salario'];
    $area = $_POST['area'];
    $direccion = $_POST['direccion'];

    $query = "UPDATE empleados SET NOMBRE='$nombre', SALARIO='$salario', AREA='$area', DIRECCION='$direccion' WHERE ID=$id";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo "<script>alert('Empleado actualizado correctamente'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Error al actualizar'); window.location='index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empleado</title>
</head>
<body>
    <h2>Editar Empleado</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $empleado['ID']; ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $empleado['NOMBRE']; ?>" required><br>
        <label>Salario:</label>
        <input type="number" name="salario" value="<?php echo $empleado['SALARIO']; ?>" required><br>
        <label>Área:</label>
        <input type="text" name="area" value="<?php echo $empleado['AREA']; ?>" required><br>
        <label>Dirección:</label>
        <input type="text" name="direccion" value="<?php echo $empleado['DIRECCION']; ?>" required><br>
        <button type="submit" name="actualizar">Actualizar</button>
    </form>
</body>
</html>
