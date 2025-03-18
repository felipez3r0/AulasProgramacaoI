# Aula 5 - Tratamento de Erros e Depuração em PHP

## Tratamento de Erros

O tratamento de erros é uma parte fundamental da programação que permite que nossos aplicativos lidem graciosamente com situações inesperadas. Em PHP moderno (PHP 8+), temos várias ferramentas e técnicas para gerenciar erros.

### Tipos de Erros em PHP

PHP tem diferentes tipos de erros:

- **Notice**: Avisos não críticos que não interrompem a execução
- **Warning**: Alertas mais sérios, mas que ainda permitem a execução
- **Fatal Error**: Erros críticos que interrompem a execução
- **Parse Error**: Erros de sintaxe no código
- **Exception**: Erros que podem ser capturados e tratados

### Try-Catch-Finally

A estrutura try-catch-finally é a forma moderna de tratar exceções em PHP:

```php
<?php
try {
    // Código que pode gerar uma exceção
    $resultado = dividir(10, 0);
} catch (DivisionByZeroError $e) {
    // Tratamento específico para divisão por zero
    echo "Erro: Divisão por zero não é permitida";
} catch (Exception $e) {
    // Tratamento genérico para outras exceções
    echo "Erro: " . $e->getMessage();
} finally {
    // Código que sempre será executado
    echo "Finalizando operação";
}
```

### Lançando Exceções Customizadas

Em PHP moderno, podemos criar nossas próprias exceções:

```php
<?php
class IdadeInvalidaException extends Exception {
    public function __construct(int $idade) {
        parent::__construct("Idade inválida: $idade");
    }
}

function validarIdade(int $idade): void {
    if ($idade < 0 || $idade > 150) {
        throw new IdadeInvalidaException($idade);
    }
}

try {
    validarIdade(200);
} catch (IdadeInvalidaException $e) {
    echo $e->getMessage();
}
```

Ainda não falamos sobre classes, vamos abordar isso nas próximas aulas. Por enquanto, você pode pensar em classes como uma forma de agrupar dados e funções relacionadas.

## Depuração

### Ferramentas de Depuração

1. **var_dump() e print_r()**
```php
<?php
$array = ["nome" => "João", "idade" => 25];
var_dump($array); // Mostra tipo e valor
print_r($array);  // Mostra apenas valor
```

2. **error_log()**
```php
<?php
error_log("Debugging: " . print_r($variavel, true));
```

3. **Xdebug**
O Xdebug é uma extensão PHP que fornece recursos de depuração:
- Breakpoints
- Inspeção de variáveis
- Stack traces
- Profiling de código

### Error Reporting

Configurando o nível de relatório de erros:

```php
<?php
// Em desenvolvimento
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Em produção
error_reporting(0);
ini_set('display_errors', 0);
```

### Assert

Assertions são úteis para depuração e testes:

```php
<?php
assert(count($array) > 0, "Array não pode estar vazio");
```

## Práticas Recomendadas

1. **Nunca mostrar erros em produção**
2. **Sempre logar erros adequadamente**
3. **Usar tipos de retorno e declarações de tipo**
4. **Validar entrada de dados**
5. **Tratar exceções específicas antes das genéricas**

## Tipos de retorno estritos

PHP 7 introduziu a possibilidade de usar tipos de retorno estritos. Isso significa que você pode especificar o tipo de dado que uma função deve retornar. Se o tipo retornado não corresponder ao especificado, uma exceção será lançada.

```php
<?php
declare(strict_types=1); // Ativa o modo estrito

function somar(int $a, int $b): int {
    return $a + $b;
}

try {
    echo somar(5, "10"); // Isso lançará um TypeError
} catch (TypeError $e) {
    echo "Erro: " . $e->getMessage();
}

```

## Praticando 🚀

Crie um arquivo chamado `calculadora.php` e implemente funções de cálculo que:
- Realizem operações básicas (soma, subtração, multiplicação, divisão)
- Usem tratamento de exceções para operações inválidas
- Validem os parâmetros de entrada
- Utilizem tipos de retorno estritos

Exemplo de uso:
```php
<?php
function dividir(float $a, float $b): float {
  if ($b === 0) {
    throw new Exception("Divisão por zero não permitida");
  }
  return $a / $b;
}

try {
  echo dividir(10, 0);
} catch (Exception $e) {
  echo "Erro: " . $e->getMessage();
}
```

## Desafio 🏆

Desenvolva um validador de formulários em PHP que:
- Valide diferentes tipos de campos (email, telefone, CPF, etc.)
- Use exceções personalizadas para cada tipo de erro
- Forneça mensagens de erro claras

## Referências 📚

- [Manual do PHP - Tratamento de Erros](https://www.php.net/manual/pt_BR/language.errors.php)
- [Manual do PHP - Exceções](https://www.php.net/manual/pt_BR/language.exceptions.php)
- [PHP 8 - Match Expression](https://www.php.net/manual/pt_BR/control-structures.match.php)
- [Xdebug - Debugging com PHP](https://xdebug.org/docs/)