<?php
session_start();
$usu = 'manolin';
$contra = '1';

if (isset($_POST['submit'])) {
    if ($_POST['usuario'] === $usu && $_POST['contrasenia'] === $contra) {
        echo 'Te has loggeado correctamente';
        exit; 
    } else {
        echo 'Usuario o contraseña incorrectos';
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <form action="" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <label>Contraseña:</label>
        <input type="text" name="contrasenia">
        <br>
        <button type="submit" name="submit">Entrar</button>
    </form>
</body>
</html>

