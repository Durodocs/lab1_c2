<?php include 'header.php'; ?>
<h2>Agregar Empleado</h2>
<form action="procesar.php" method="POST">
    <label>Nombre: <input type="text" name="nombre" required></label><br>
    <label>Salario: <input type="number" name="salario" required></label><br>
    <label>Área: <input type="text" name="area" required></label><br>
    <label>Dirección: <input type="text" name="direccion" required></label><br>
    <button type="submit" name="crear" class="btn btn-add">Guardar</button>
</form>
<?php include 'footer.php'; ?>
