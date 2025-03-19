<?php

include 'conection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM empleados WHERE ID = $id";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo "<script>alert('Empleado eliminado correctamente'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Error al eliminar empleado'); window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('ID no válido'); window.location='index.php';</script>";
}



?>
