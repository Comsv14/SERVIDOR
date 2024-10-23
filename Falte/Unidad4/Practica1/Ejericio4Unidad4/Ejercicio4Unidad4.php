<?php
/* 
    Construir  un  calendario,  se  ha  de  introducir  un  mes  y  un  año  y  al  pulsar  el  botón 
    ENVIAR, a partir de esos datos, con las funciones de PHP para trabajar con fechas se 
    ha de dibujar el calendario del mes y año indicado. Se ha de controlar el número de 
    días, así como  el día de la semana en que empieza dicho  mes. El resultado  se ha de 
    mostrar en formato tabla de HTML  y se ha de resolver en un solo script.
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mes = intval($_POST['mes']);
    $anio = intval($_POST['anio']);

    // Comprobar si el mes y el año son válidos
    if ($mes < 1 || $mes > 12 || $anio < 1900 || $anio > 2100) {
        echo "<p>Por favor, ingrese un mes entre 1 y 12, y un año válido entre 1900 y 2100.</p>";
        exit;
    }

    // Obtener el número de días del mes y el día de la semana en que comienza
    $primer_dia = mktime(0, 0, 0, $mes, 1, $anio);
    $dias_mes = date('t', $primer_dia); // Número de días del mes
    $dia_semana_comienzo = date('N', $primer_dia) - 1; // Día de la semana (0 para lunes, 6 para domingo)

    // Array de nombres de días (empezando por lunes)
    $dias_semana = ['L', 'M', 'X', 'J', 'V', 'S', 'D'];

    // Mostrar el título del calendario con el mismo ancho que la tabla
    echo "<div class='calendario-titulo'>Calendario $anio</div>";
    
    echo "<table>";
    echo "<tr>";
    // Imprimir los nombres de los días de la semana
    foreach ($dias_semana as $dia) {
        echo "<th>$dia</th>";
    }
    echo "</tr><tr>";

    // Crear celdas vacías hasta el primer día del mes
    for ($i = 0; $i < $dia_semana_comienzo; $i++) {
        echo "<td></td>";
    }

    // Llenar el calendario con los días del mes
    for ($dia = 1; $dia <= $dias_mes; $dia++) {
        echo "<td>$dia</td>";
        // Salto de línea al terminar domingo
        if (($dia + $dia_semana_comienzo) % 7 == 0 && $dia < $dias_mes) {
            echo "</tr><tr>";
        }
    }

    // Completar las celdas vacías al final de la semana
    while (($dia_semana_comienzo + $dias_mes) % 7 != 0) {
        echo "<td></td>";
        $dia_semana_comienzo++;
    }

    echo "</tr>";
    echo "</table>";
}

?>