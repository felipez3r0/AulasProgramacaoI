# Aula 3 - Programação e lógica

## Primeiros passos com PHP

### O que é PHP?

PHP é uma linguagem de programação de uso geral, especialmente adequada para o desenvolvimento web. É uma linguagem de código aberto, muito popular e amplamente utilizada. Foi criada em 1994 por Rasmus Lerdorf.

### Por que PHP?

- **Facilidade de aprendizado**: PHP é uma linguagem de programação fácil de aprender e usar.
- **Gratuito**: PHP é uma linguagem de código aberto, o que significa que é gratuita para uso e distribuição.
- **Suporte a banco de dados**: PHP oferece suporte a uma ampla variedade de bancos de dados, como MySQL, PostgreSQL, Oracle, etc.
- **Ampla comunidade**: PHP tem uma grande comunidade de desenvolvedores que contribuem com bibliotecas, frameworks e tutoriais.
- **Ampla documentação**: PHP tem uma documentação extensa e bem organizada.
- **Suporte a servidores web**: PHP é suportado por uma ampla variedade de servidores web, como Apache, Nginx, etc.
- **Ampla gama de aplicações**: PHP é usado em uma ampla variedade de aplicações, como sites, blogs, lojas online, etc.

O PHP é a linguagem por trás de muitos sites populares, como Facebook, Wikipedia, WordPress, etc. O Wordpress atualmente é a plataforma de gerenciamento de conteúdo mais popular do mundo, estima-se que cerca de 40% dos sites da web toda são construídos com Wordpress, isso quer dizer que 4 em cada 10 sites que você acessa são feitos com PHP (https://w3techs.com/technologies/details/cm-wordpress).

O PHP tem suas limitações, mas é uma excelente escolha para quem está começando a programar e deseja desenvolver aplicações web. O principal ponto aqui é aprender os conceitos de programação e lógica de programação, que são fundamentais para qualquer linguagem de programação.

### Instalação do PHP

#### Windows

Para instalar o PHP no Windows, vamos baixar o ZIP pelo site (https://windows.php.net/download/), aqui vamos usar o PHP 8.4 NTS (VS17 x64 Non Thread Safe) e descompactar o arquivo em uma pasta de sua preferência, a recomendação é fazer isso em C: para facilitar o acesso.

Em seguida vamos adicionar o caminho do PHP no PATH do Windows, para isso siga os passos abaixo:

1. Clique com o botão direito do mouse no ícone do Windows e selecione "Sistema".
2. Clique em "Configurações avançadas do sistema".
3. Clique em "Variáveis de ambiente".
4. Na variável de sistema "Path", clique em "Editar".
5. Clique em "Novo" e adicione o caminho do PHP, por exemplo: `C:\php`.

#### Linux

A maior parte das Distros já vem com o PHP instalado, para verificar se o PHP está instalado, abra o terminal e digite o comando `php -v`, se o PHP estiver instalado, você verá a versão do PHP instalada.

Caso precise instalar o PHP, se for uma distro baseada em Debian (Ubuntu, Mint, etc), você pode instalar o PHP com o comando `sudo apt install php`, se for uma distro baseada em Red Hat (Fedora, CentOS, etc), você pode instalar o PHP com o comando `sudo dnf install php`.

#### MacOS

Algumas versões do MacOS já vem com o PHP instalado, para verificar se o PHP está instalado, abra o terminal e digite o comando `php -v`, se o PHP estiver instalado, você verá a versão do PHP instalada.

Caso precise instalar o PHP, você pode instalar o PHP com o Homebrew, para isso, abra o terminal e digite o comando `brew install php`.

### Primeiro script em PHP

Vamos criar um arquivo chamado `index.php` com o seguinte conteúdo:

```php
<?php
echo "Olá, mundo!";
```

Para executar o script, abra o terminal e navegue até a pasta onde o arquivo `index.php` está localizado e digite o comando `php index.php`, você verá a mensagem "Olá, mundo!".

Podemos executar o script PHP de duas formas, a primeira é executando o script no terminal, como fizemos acima, a segunda é executando o script em um servidor web, para isso, vamos usar o servidor web embutido do PHP, para isso, abra o terminal e navegue até a pasta onde o arquivo `index.php` está localizado e digite o comando `php -S localhost:8000`, em seguida abra o navegador e acesse o endereço `http://localhost:8000`, você verá a mensagem "Olá, mundo!". Para finalizar o servidor web, pressione `Ctrl + C` no terminal.

A tag `<?php` é usada para iniciar o bloco de código PHP e a tag `?>` é usada para finalizar o bloco de código PHP, quando temos apenas PHP no arquivo, não é necessário fechar a tag `?>`.

### Variáveis em PHP

Variáveis são usadas para armazenar dados, como números, strings, arrays, objetos, etc. Em PHP, as variáveis são declaradas com o caractere `$`, seguido pelo nome da variável.

```php
<?php
$nome = "João";
echo $nome;
```

As variáveis em PHP são fracamente tipadas, o que significa que não é necessário declarar o tipo de dado que a variável irá armazenar, o PHP faz isso automaticamente. Também é possível alterar o tipo de dado de uma variável durante a execução do script.

```php
<?php
$idade = 30;
echo $idade;
$idade = "trinta";
echo $idade;
```

É possível utilizar tipagem forte a partir do PHP 7, as declarações de tipo podem ser adicionadas a argumentos de função, valores de retorno, propriedades de classe e, a partir do PHP 8.3.0, constantes de classe.

Com relação a utilização de aspas simples e duplas, as aspas duplas permitem a interpolação de variáveis, ou seja, é possível incluir o valor de uma variável em uma string, enquanto as aspas simples não permitem a interpolação de variáveis.

```php
<?php
$nome = "João";
echo "Olá, $nome!"; // Olá, João!
echo 'Olá, $nome!'; // Olá, $nome!
```

Se não for realizar a interpolação de variáveis, é recomendado utilizar as aspas simples, pois o PHP não precisa analisar a string para encontrar variáveis, o que torna o processamento mais rápido.

### Operadores em PHP

Os operadores são usados para realizar operações em variáveis e valores. Em PHP, existem vários tipos de operadores, como aritméticos, de comparação, lógicos, de atribuição, etc.

#### Operadores aritméticos

Os operadores aritméticos são usados para realizar operações matemáticas em variáveis e valores.

```php
<?php
$numero1 = 10;
$numero2 = 5;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;
$resto = $numero1 % $numero2;

echo "Soma: " . $soma . "\n";
echo "Subtração: " . $subtracao . "\n";
echo "Multiplicação: " . $multiplicacao . "\n";
echo "Divisão: " . $divisao . "\n";
echo "Resto: " . $resto . "\n";
```

#### Operadores de comparação

Os operadores de comparação são usados para comparar valores e variáveis.

```php
<?php
$numero1 = 10;
$numero2 = 5;

echo $numero1 == $numero2; // false
echo $numero1 != $numero2; // true
echo $numero1 > $numero2; // true
echo $numero1 < $numero2; // false
echo $numero1 >= $numero2; // true
echo $numero1 <= $numero2; // false
```

#### Operadores lógicos

Os operadores lógicos são usados para combinar expressões condicionais.

```php
<?php
$idade = 30;
$sexo = "masculino";

if ($idade >= 18 && $sexo == "masculino") {
    echo "Maior de idade do sexo masculino";
} else {
    echo "Menor de idade ou do sexo feminino";
}
```

#### Operadores de atribuição

Os operadores de atribuição são usados para atribuir valores a variáveis.

```php
<?php
$numero = 10;
$numero += 5; // $numero = $numero + 5;
$numero -= 5; // $numero = $numero - 5;
$numero *= 5; // $numero = $numero * 5;
$numero /= 5; // $numero = $numero / 5;
$numero %= 5; // $numero = $numero % 5;
```

### Estruturas de controle em PHP

As estruturas de controle são usadas para controlar o fluxo de execução de um script PHP. Em PHP, existem várias estruturas de controle, como `if`, `else`, `elseif`, `switch`, `while`, `do while`, `for`, `foreach`, `break`, `continue`, etc.

Já vimos um exemplo de estrutura de controle `if` no tópico anterior, aqui vamos ver mais exemplos de estruturas de controle, focando em estruturas de repetição.

#### Estrutura de repetição `while`

A estrutura de repetição `while` é usada para executar um bloco de código enquanto uma condição for verdadeira.

```php
<?php
$numero = 1;

while ($numero <= 10) {
    echo $numero . "\n";
    $numero++;
}
```

#### Estrutura de repetição `do while`

A estrutura de repetição `do while` é semelhante à estrutura de repetição `while`, mas a diferença é que o bloco de código é executado pelo menos uma vez, mesmo que a condição seja falsa.

```php
<?php
$numero = 1;

do {
    echo $numero . "\n";
    $numero++;
} while ($numero <= 10);
```

#### Estrutura de repetição `for`

A estrutura de repetição `for` é usada para executar um bloco de código um número específico de vezes.

```php
<?php
for ($numero = 1; $numero <= 10; $numero++) {
    echo $numero . "\n";
}
```

## Praticando

Crie um arquivo chamado `exercicio.php` e faça um código que vai ter uma variável chamada `$numero`, em seguida imprima a tabuada desse número de 1 a 10.

Exemplo de saída esperado
```
1 x 5 = 5
2 x 5 = 10
3 x 5 = 15
4 x 5 = 20
5 x 5 = 25
6 x 5 = 30
7 x 5 = 35
8 x 5 = 40
9 x 5 = 45
10 x 5 = 50
```