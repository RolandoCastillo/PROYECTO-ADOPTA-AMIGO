<!DOCTYPE html>
<html>
<head>
    <title>Registro de Animales</title>
</head>
<body>

<h2>Registrar Animal</h2>

<form action="guardar.php" method="POST">
    Nombre: <input type="text" name="nombre"><br><br>
    Especie: <input type="text" name="especie"><br><br>
    Edad: <input type="number" name="edad"><br><br>
    Tamaño: <input type="text" name="tamano"><br><br>
    Ubicación: <input type="text" name="ubicacion"><br><br>
    
    Estatus:
    <select name="estatus">
        <option value="Disponible">Disponible</option>
        <option value="Adoptado">Adoptado</option>
    </select><br><br>

    <button type="submit">Guardar</button>
</form>

<br>
<a href="mostrar.php">Ver animales</a>

</body>
</html>