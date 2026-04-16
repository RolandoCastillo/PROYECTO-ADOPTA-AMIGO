<?php
include("Conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$edad = $_POST['edad'];
$tamano = $_POST['tamano'];
$ubicacion = $_POST['ubicacion'];

$sql = "UPDATE animales SET 
nombre='$nombre',
especie='$especie',
edad='$edad',
tamano='$tamano',
ubicacion='$ubicacion'
WHERE id=$id";

$conexion->query($sql);

header("Location: mostrar.php");
?>