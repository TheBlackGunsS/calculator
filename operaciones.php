<?php
// Función para sumar dos números
function sumar($a, $b) {
    return $a + $b;
}

// Función para restar dos números
function restar($a, $b) {
    return $a - $b;
}

// Definir dos números
$num1 = 10;
$num2 = 5;

// Realizar las operaciones y mostrar los resultados
echo "Suma de $num1 y $num2: " . sumar($num1, $num2) . "\n";

echo "Resta de $num1 y $num2: " . restar($num1, $num2) . "\n";
?>