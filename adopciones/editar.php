<?php
include("conexion.php");

$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM animales WHERE id=$id");
$row = $resultado->fetch_assoc();
?>

<h2>Editar Animal</h2>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br><br>
    Especie: <input type="text" name="especie" value="<?php echo $row['especie']; ?>"><br><br>
    Edad: <input type="number" name="edad" value="<?php echo $row['edad']; ?>"><br><br>
    Tamaño: <input type="text" name="tamano" value="<?php echo $row['tamaño']; ?>"><br><br>
    Ubicación: <input type="text" name="ubicacion" value="<?php echo $row['ubicacion']; ?>"><br><br>

    <button type="submit">Actualizar</button>
</form>