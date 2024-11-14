<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir binario</title>
</head>
<body>
    <h2>Convierte a binario</h2>
    <form method="post">
<?php
for ($i=0; $i < 2; $i++) { 
    for ($j=0; $j < 3 ; $j++) { 
        echo "<input type='number' name='numero[i][j]' min='1' max='100' required>";
    }
    echo "<br>";
}
?>
<buttom type="submit" name="calcular">Calcular</buttom>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['calcular'])){
    $numeros = $_POST['numero'];
    echo "<h3>Resultado en Binario </h3>";
    echo "<table>";
    foreach($numeros as $fila){
        echo "<tr>";
        foreach($fila as $numeros){
            if ($numero >=1 && $numero <=100 ){
                echo "</td>" . decbin($numero) . "</td>";
            }else {
                echo "<td>Invalido</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>