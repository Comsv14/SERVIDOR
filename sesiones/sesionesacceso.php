<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="sesiones1full.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <label>Contraseña:</label>
        <input type="text" name="contrasenia">
        <br>
        <label>Confirmar contraseña:</label>
        <input type="text" name="contraseniaC">
        <br>
        <label>Estandar</label>
        <input type="radio" name="Estandar">
        <label>Premium</label>
        <input type="radio" name="Premium">
        <br>
        <button type="submit" name="submit">Entrar</button>
    </form>
    
</body>
</html>