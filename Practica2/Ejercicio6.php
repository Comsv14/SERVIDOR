<?php
/* Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar
fila y columna del elemento mayor.*/

// Dimensiones de la matriz
$filas = 4;
$columnas = 5;

// Crear la matriz de 4x5 con valores aleatorios entre 1 y 100
$matriz = [];
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = rand(1, 100); // Genera un número aleatorio entre 1 y 100
    }
}

// Mostrar la matriz generada
echo "Matriz generada:\n";
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        echo $matriz[$i][$j] . "\t";
    }
    echo "\n";
}

// Inicializar variables para encontrar el valor máximo
$maxValor = $matriz[0][0];
$maxFila = 0;
$maxColumna = 0;

// Buscar el valor mayor en la matriz
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        if ($matriz[$i][$j] > $maxValor) {
            $maxValor = $matriz[$i][$j];
            $maxFila = $i;
            $maxColumna = $j;
        }
    }
}

// Mostrar el resultado
echo "\nEl valor máximo es: $maxValor\n";
echo "Se encuentra en la fila: " . ($maxFila + 1) . " y columna: " . ($maxColumna + 1) . "\n";
?>