<?php
include("Conexion.php");

if (isset($_GET['buscar'])) {
    $buscar = $_GET['buscar'];
    $sql = "SELECT * FROM animales WHERE nombre LIKE '%$buscar%' OR especie LIKE '%$buscar%'";
} else {
    $sql = "SELECT * FROM animales";
}

$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Animales</title>
</head>
<body>

<h2>Animales en adopción</h2>

<form method="GET">
    Buscar:
    <input type="text" name="buscar">
    <button type="submit">Buscar</button>
</form>

<br>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Especie</th>
    <th>Edad</th>
    <th>Tamaño</th>
    <th>Ubicación</th>
    <th>Estatus</th>
    <th>Acciones</th>
</tr>

<?php while($row = $resultado->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['nombre']; ?></td>
    <td><?php echo $row['especie']; ?></td>
    <td><?php echo $row['edad']; ?></td>
    <td><?php echo $row['tamano']; ?></td>
    <td><?php echo $row['ubicacion']; ?></td>
    <td><?php echo $row['estatus']; ?></td>
    <td>
        <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
        |
        <a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.php">Regresar</a>

</body>
</html>