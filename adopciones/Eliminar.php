<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM animales WHERE id=$id";

$conexion->query($sql);

header("Location: mostrar.php");
?>