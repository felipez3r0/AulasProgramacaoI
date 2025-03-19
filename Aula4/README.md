# Aula 4 - Funções e Tipos de Dados em PHP

## Funções em PHP

Uma função é um bloco de código que pode ser reutilizado em diferentes partes do programa. Em PHP, as funções são definidas usando a palavra-chave `function`.

### Sintaxe Básica

```php
function nomeDaFuncao($parametro1, $parametro2) {
    // código da função
    return $resultado;
}
```

### Exemplos de Funções

```php
<?php
// Função sem parâmetros
function saudacao() {
    return "Olá, mundo!";
}

// Função com parâmetros
function soma($a, $b) {
    return $a + $b;
}

// Função com parâmetros opcionais
function multiplicacao($a, $b = 2) {
    return $a * $b;
}

// Chamando as funções
echo saudacao(); // Olá, mundo!
echo soma(5, 3); // 8
echo multiplicacao(4); // 8 (usando valor padrão do segundo parâmetro)
```

### Tipos de Retorno

A partir do PHP 7, podemos declarar o tipo de retorno das funções:

```php
<?php
function soma(int $a, int $b): int {
    return $a + $b;
}

function getNome(): string {
    return "João";
}

function isAdulto(int $idade): bool {
    return $idade >= 18;
}
```

## Tipos de Dados em PHP

### Strings

Strings são sequências de caracteres. PHP oferece várias funções para manipulação de strings:

```php
<?php
$nome = "João Silva";

// Comprimento da string
echo strlen($nome); // 10

// Converter para maiúsculas
echo strtoupper($nome); // JOÃO SILVA

// Converter para minúsculas
echo strtolower($nome); // joão silva

// Substituir texto
echo str_replace("Silva", "Santos", $nome); // João Santos

// Dividir string
$partes = explode(" ", $nome);
print_r($partes); // Array([0] => João [1] => Silva)

// Juntar array em string
$array = ["PHP", "é", "legal"];
echo implode(" ", $array); // PHP é legal
```

### Arrays

Arrays são estruturas que podem armazenar múltiplos valores. PHP suporta arrays indexados numericamente e arrays associativos:

```php
<?php
// Array indexado
$frutas = ["maçã", "banana", "laranja"];
echo $frutas[0]; // maçã

// Array associativo
$pessoa = [
    "nome" => "João",
    "idade" => 25,
    "cidade" => "São Paulo"
];
echo $pessoa["nome"]; // João

// Funções úteis para arrays
$numeros = [1, 2, 3, 4, 5];

// Contar elementos
echo count($numeros); // 5

// Somar elementos
echo array_sum($numeros); // 15

// Verificar se elemento existe
var_dump(in_array(3, $numeros)); // bool(true)

// Adicionar elemento
array_push($numeros, 6);

// Remover último elemento
$ultimo = array_pop($numeros);

// Ordenar array
sort($numeros);
```

### Outros tipos

Uma lista detalhada com os tipos e seus principais pontos pode ser encontrada na documentação oficial do PHP em - [Tipos](https://www.php.net/manual/pt_BR/language.types.php)

### Foreach com Arrays

O `foreach` é especialmente útil para percorrer arrays:

```php
<?php
$cores = ["vermelho", "azul", "verde"];

// Percorrendo valores
foreach ($cores as $cor) {
    echo $cor . "\n";
}

// Percorrendo chaves e valores
$pessoa = [
    "nome" => "Maria",
    "idade" => 30,
    "profissao" => "Desenvolvedora"
];

foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor\n";
}
```

## Praticando 🚀

Crie um arquivo chamado `manipulacao_arrays.php` e desenvolva uma função que recebe um array de números e retorna:
- A soma de todos os números
- A média dos números
- O maior número
- O menor número

Exemplo de uso:
```php
$numeros = [10, 5, 8, 12, 3];
$resultado = analisarNumeros($numeros);
print_r($resultado);
```

Saída esperada:
```
Array
(
    [soma] => 38
    [media] => 7.6
    [maior] => 12
    [menor] => 3
)
```

## Desafio 🏆

Crie um sistema simples de agenda em PHP que permita:
- Adicionar contatos (nome, telefone, email)
- Listar todos os contatos
- Buscar contatos por nome
- Remover contatos

Use arrays associativos para armazenar os contatos e crie funções para cada operação.

Uma opção é trabalhar com o $_SESSION para armazenar os dados entre os envios, já que a variavel em memória será zerada sempre que um form é enviado.

## Referências 📚

- [Manual do PHP - Funções](https://www.php.net/manual/pt_BR/language.functions.php)
- [Manual do PHP - Arrays](https://www.php.net/manual/pt_BR/book.array.php)
- [Manual do PHP - Strings](https://www.php.net/manual/pt_BR/book.strings.php)
- [PHP.net](https://www.php.net/)
