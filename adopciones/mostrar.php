<?php
include("conexion.php");
$resultado = $conexion->query("SELECT * FROM animales");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Animales</title>
</head>
<body>

<h2>Animales en adopción</h2>

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
    <td><?php echo $row['tamaño']; ?></td>
    <td><?php echo $row['ubicacion']; ?></td>
    <td><?php echo $row['estatus']; ?></td>
    <td>
        <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a> |
        <a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.php">Regresar</a>

</body>
</html>