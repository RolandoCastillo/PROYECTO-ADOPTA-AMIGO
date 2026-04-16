<?php
include("Conexion.php");

$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM animales WHERE id=$id");
$row = $resultado->fetch_assoc();
?>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Nombre:
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br>

    Especie:
    <input type="text" name="especie" value="<?php echo $row['especie']; ?>"><br>

    Edad:
    <input type="number" name="edad" value="<?php echo $row['edad']; ?>"><br>

    Tamaño:
    <input type="text" name="tamano" value="<?php echo $row['tamano']; ?>"><br>

    Ubicación:
    <input type="text" name="ubicacion" value="<?php echo $row['ubicacion']; ?>"><br>

    <button type="submit">Actualizar</button>
</form>