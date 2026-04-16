<?php
include("conexion.php");
include("Conexion.php");

$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$edad = $_POST['edad'];
$tamano = $_POST['tamano'];
$ubicacion = $_POST['ubicacion'];
$estatus = $_POST['estatus'];

$sql = "INSERT INTO animales (nombre, especie, edad, tamaño, ubicacion, estatus)
$sql = "INSERT INTO animales (nombre, especie, edad, tamano, ubicacion, estatus)
VALUES ('$nombre','$especie','$edad','$tamano','$ubicacion','$estatus')";

$conexion->query($sql);

header("Location: index.php");
?>