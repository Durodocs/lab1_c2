<?php include 'conection.php'; ?>
<?php include 'header.php'; ?>
<link rel="stylesheet" href="styles.css">
<h2>Lista de empleados</h2>


<a href="crear.php" class="btn btn-add">Agregar empleado</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Salario</th>
        <th>Área</th>
        <th>Dirección</th>
        <th>Acciones</th>
    </tr>
    <?php
    $query = "SELECT * FROM empleados";
    $result = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['ID']}</td>";
        echo "<td>{$row['NOMBRE']}</td>";
        echo "<td>{$row['SALARIO']}</td>";
        echo "<td>{$row['AREA']}</td>";
        echo "<td>{$row['DIRECCION']}</td>";
        echo "<td>
                <a href='editar.php?id={$row['ID']}' class='btn btn-edit'>Editar</a> 
                <a href='eliminar.php?id={$row['ID']}' class='btn btn-delete'>Eliminar</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>
<?php include 'footer.php'; ?>