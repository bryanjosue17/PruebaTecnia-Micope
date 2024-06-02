<?php
// Función para calcular la tabla de amortización de un préstamo
function calcularAmortizacion($monto, $plazoMeses, $tasaInteresMensual) {
    $tablaAmortizacion = []; // Inicializar la matriz de la tabla de amortización
    $saldo = $monto;
    $cuota = $monto * ($tasaInteresMensual / (1 - pow((1 + $tasaInteresMensual), -$plazoMeses)));
    
    // Calcular los valores para cada periodo y agregarlos a la tabla de amortización
    for ($periodo = 1; $periodo <= $plazoMeses; $periodo++) {
        $interes = $saldo * $tasaInteresMensual;
        $abono = $cuota - $interes;
        $saldo -= $abono;
        // Agregar los valores de cada periodo como un array (fila) a la tabla de amortización
        $tablaAmortizacion[] = [$periodo, $saldo, $interes, $abono, $cuota];
    }
    
    return $tablaAmortizacion; // Devolver la tabla de amortización completa
}

// Solicitar al usuario los datos del préstamo
$monto = floatval(readline("Ingrese el monto del préstamo: "));
$plazoMeses = intval(readline("Ingrese el plazo en meses: "));
$tasaInteresMensual = floatval(readline("Ingrese la tasa de interés mensual (%): ")) / 100;

// Calcular la tabla de amortización
$tabla = calcularAmortizacion($monto, $plazoMeses, $tasaInteresMensual);

// Mostrar la tabla de amortización
echo "Periodo\tSaldo\tInteres\tAbono\tPago\n";
foreach ($tabla as $fila) {
    // Imprimir cada fila de la matriz de la tabla de amortización
    echo implode("\t", $fila) . "\n";
}
?>
