<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Animales</title>

    <style>
    body {
        font-family: Arial;
        background-color: #f4f6f9;
    }

    form {
        background: white;
        padding: 20px;
        width: 300px;
        border-radius: 10px;
    }

    input, select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
    }

    button {
        background: #007bff;
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
    }

    button:hover {
        background: #0056b3;
    }
    </style>

</head>
<body>

<h1>Registrar Animal</h1>

<a href="logout.php">Cerrar sesión</a>
<br><br>

<form action="guardar.php" method="POST">
    Nombre:
    <input type="text" name="nombre">

    Especie:
    <input type="text" name="especie">

    Edad:
    <input type="number" name="edad">

    Tamaño:
    <input type="text" name="tamano">

    Ubicación:
    <input type="text" name="ubicacion">

    Estatus:
    <select name="estatus">
        <option>Disponible</option>
        <option>Adoptado</option>
    </select>

    <button type="submit">Guardar</button>
</form>

<br>
<a href="mostrar.php">Ver animales</a>

</body>
</html>