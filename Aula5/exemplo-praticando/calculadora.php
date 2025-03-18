<?php
declare(strict_types=1);

/**
 * Soma dois números
 */
function soma(float|int $a, float|int $b): float|int {
  return $a + $b;
}

/**
 * Subtrai dois números
 */
function subtracao(float|int $a, float|int $b): float|int {
  return $a - $b;
}

/**
 * Multiplica dois números
 */
function multiplicacao(float|int $a, float|int $b): float|int {
  return $a * $b;
}

/**
 * Divide dois números
 * @throws DivisionByZeroError se o divisor for zero
 */
function divisao(float|int $a, float|int $b): float {
  if ($b === 0) {
    throw new DivisionByZeroError("Não é possível dividir por zero");
  }
  return $a / $b;
}

// Exemplo de uso com tratamento de exceções
try {
  echo "Soma: " . soma(10, 5) . "\n";
  echo "Subtração: " . subtracao(10, 5) . "\n";
  echo "Multiplicação: " . multiplicacao(10, 5) . "\n";
  echo "Divisão: " . divisao(10, 5) . "\n";
  
  // Teste de erro
  echo divisao(10, 0);
} catch (DivisionByZeroError $e) {
  echo "Erro: " . $e->getMessage() . "\n";
}