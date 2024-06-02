<?php
// Función para calcular el factorial de un número
function factorial($n) {
    if ($n === 0) { // Si el número es 0, el factorial es 1
        return 1;
    } else {
        return $n * factorial($n - 1); // Fórmula recursiva para calcular el factorial
    }
}

// Solicitar al usuario un número
$numero = intval(readline("Ingrese un número para calcular su factorial: "));

// Verificar si el número ingresado es válido (mayor o igual a 0)
if ($numero < 0) {
    echo "El número debe ser mayor o igual a 0.\n";
} else {
    // Calcular el factorial del número ingresado
    $factorial = factorial($numero);

    // Mostrar el resultado del factorial
    echo "$numero! = ";
    for ($i = $numero; $i >= 1; $i--) {
        echo $i;
        if ($i != 1) {
            echo " * ";
        }
    }
    echo " = $factorial\n";
}
?>
