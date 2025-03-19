<?php
include 'conection.php';
if (isset($_POST['crear'])) {
    $nombre = $_POST['nombre'];
    $salario = $_POST['salario'];
    $area = $_POST['area'];
    $direccion = $_POST['direccion'];
    $query = "INSERT INTO empleados (NOMBRE, SALARIO, AREA, DIRECCION) VALUES ('$nombre', '$salario', '$area', '$direccion')";
    mysqli_query($conexion, $query);
    header("Location: index.php");
}
?>