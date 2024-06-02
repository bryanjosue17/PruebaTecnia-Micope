<?php
// Función para calcular el coeficiente binomial 
function coeficienteBinomial($n, $k) {
    if ($k === 0 || $k === $n) {
        return 1;
    } else {
        return coeficienteBinomial($n - 1, $k - 1) + coeficienteBinomial($n - 1, $k);
    }
}

// Función recursiva para calcular la potencia de binomios (a + b)^n
function potenciaBinomio($a, $b, $n) {
    $resultado = ""; // Inicializamos el resultado como una cadena vacía
    for ($i = 0; $i <= $n; $i++) {
        $coeficiente = coeficienteBinomial($n, $i); // Calculamos el coeficiente binomial
        // Concatenamos los términos al resultado
        if ($coeficiente != 1) {
            $resultado .= $coeficiente;
        }
        if ($i > 0) {
            $resultado .= $a;
        }
        if ($n - $i > 0) {
            $resultado .= "^" . ($n - $i);
        }
        if ($i > 0) {
            $resultado .= $b;
        }
        if ($i > 0 && $i < $n) {
            $resultado .= "^" . $i;
        }
        if ($i < $n) {
            $resultado .= " + ";
        }
    }
    return $resultado; // Devolvemos el resultado completo del binomio
}

// Solicitar al usuario la potencia a la que se desea elevar el binomio
$potencia = intval(readline("Ingrese la potencia a la que se desea elevar el binomio: "));

// Mostrar el resultado del binomio
echo "Resultado: (a + b)^$potencia = " . potenciaBinomio('a', 'b', $potencia) . "\n";
?>
