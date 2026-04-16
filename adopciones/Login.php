<?php
session_start();

if ($_POST) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if ($usuario == "admin" && $password == "1234") {
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
?>

<h2>Login</h2>

<form method="POST">
    Usuario: <input type="text" name="usuario"><br><br>
    Contraseña: <input type="password" name="password"><br><br>
    <button type="submit">Ingresar</button>
</form>