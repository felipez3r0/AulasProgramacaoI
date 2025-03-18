<?php

function analisarNumeros(array $numeros): array {
    return [
        'soma' => array_sum($numeros),
        'media' => array_sum($numeros) / count($numeros),
        'maior' => max($numeros),
        'menor' => min($numeros)
    ];
}

// Teste da função
$numeros = [10, 5, 8, 12, 3];
$resultado = analisarNumeros($numeros);
print_r($resultado);
