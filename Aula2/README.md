# Aula 2 - Conceitos básicos da Web

## O que é a Web?

A World Wide Web (WWW), ou simplesmente Web, é um sistema de informações interligadas que permite o acesso a documentos e dados por meio da internet. Foi criada por Tim Berners-Lee em 1989 e é uma das maiores invenções da era digital.

## Como a Web funciona?

A Web funciona por meio de protocolos de comunicação, como o HTTP (Hypertext Transfer Protocol), que permitem a transferência de dados entre servidores e clientes. Os principais termos e componentes da Web são:

- **Servidores**: Computadores que armazenam e disponibilizam conteúdo na Web.
- **Clientes**: Dispositivos que acessam e exibem conteúdo da Web.
- **Navegadores**: Aplicativos que permitem a visualização de páginas da Web.
- **URLs**: Endereços que identificam recursos na Web.
- **HTML**: Linguagem de marcação usada para criar páginas da Web.
- **CSS**: Linguagem de estilização usada para definir o layout e a aparência das páginas da Web.
- **JavaScript**: Linguagem de programação usada para adicionar interatividade às páginas da Web.

## Protocolos da Web

Além do HTTP, existem outros protocolos importantes para o funcionamento da Web, como:

- **HTTPS**: Versão segura do HTTP, que criptografa os dados transmitidos.
- **FTP**: Protocolo de transferência de arquivos, usado para enviar e receber arquivos pela internet.
- **SMTP**: Protocolo de transferência de e-mails, usado para enviar e receber mensagens de e-mail.
- **DNS**: Sistema de Nomes de Domínio, usado para traduzir endereços IP em nomes de domínio.

### Protocolo HTTP

O HTTP é o protocolo mais utilizado na Web e define como as mensagens são formatadas e transmitidas entre servidores e clientes. Ele é baseado no modelo requisição-resposta e possui os seguintes métodos:

- **GET**: Solicita a recuperação de um recurso.
- **POST**: Envia dados para serem processados por um recurso.
- **PUT**: Substitui um recurso existente.
- **DELETE**: Remove um recurso.
- **PATCH**: Atualiza parcialmente um recurso.

Ao acessar um site, seu navegador envia uma requisição HTTP para o servidor, que processa a solicitação e envia uma resposta de volta, contendo o conteúdo da página. Os dois tipos mais comuns de requisições são:

- **Requisições GET**: Usadas para recuperar informações de um servidor.
- **Requisições POST**: Usadas para enviar dados para um servidor, como formulários.

## Estrutura de uma Página Web

Uma página da Web é composta por diversos elementos, como:

- **HTML**: Define a estrutura e o conteúdo da página.
- **CSS**: Define o estilo e a aparência da página.
- **JavaScript**: Adiciona interatividade e dinamismo à página.

Exemplo de uma página simples em HTML:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Minha Página</title>
    <!-- Link para um arquivo CSS externo -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Olá, mundo!</h1>
    <p>Esta é a minha primeira página da Web.</p>
    <!-- Link para um arquivo JavaScript externo -->
    <script src="script.js"></script>
</body>
</html>
```

Podemos criar arquivos HTML em qualquer editor de texto e visualizá-los em um navegador para ver o resultado. A sugestão aqui é utilizar o VS Code, que é um editor de código gratuito e muito popular entre desenvolvedores. (https://code.visualstudio.com/)

## Estilizando uma Página com CSS

O CSS (Cascading Style Sheets) é uma linguagem de estilização usada para definir o layout e a aparência de páginas da Web. Ele permite controlar cores, fontes, tamanhos, margens, entre outros aspectos visuais.

No exemplo de página anterior podemos ajustar o H1 para ter uma cor vermelha e o parágrafo para ter uma fonte maior adicionando o seguinte código CSS em um arquivo `styles.css`:

```css
h1 {
    color: red;
}

p {
    font-size: 18px;
}
```

 A primeira parte antes das chaves `{}` é o seletor, que indica qual elemento será estilizado, e a segunda parte dentro das chaves são as propriedades e valores de estilo. É muito comum a utilização de classes para estilizar elementos com reaproveitamento de código e de forma mais específica. Por exemplo, podemos adicionar uma classe `destaque` ao parágrafo para estilizá-lo de forma diferente:

```html
<p class="destaque">Este parágrafo está em destaque!</p>
```

```css
.destaque {
    font-weight: bold;
    background-color: yellow;
}
```

O `.destaque` é um seletor de classe, que permite estilizar elementos com base em uma classe específica. Ele é precedido por um ponto (`.`) no CSS.

### Flexbox

Flexbox é um modelo de layout bidimensional que permite criar layouts complexos e flexíveis sem a necessidade de floats ou posicionamento absoluto. Ele é amplamente utilizado para criar designs responsivos e alinhamentos de elementos em páginas da Web.

Para utilizar o Flexbox, basta adicionar a propriedade `display: flex;` ao elemento pai e definir as propriedades de alinhamento e distribuição dos elementos filhos. Por exemplo, podemos criar uma lista de itens alinhados horizontalmente com o seguinte código HTML e CSS:

```html
<div class="container">
    <div class="item">Item 1</div>
    <div class="item">Item 2</div>
    <div class="item">Item 3</div>
</div>
```

```css
.container {
    display: flex;
}

.item {
    margin: 10px;
    padding: 10px;
    border: 1px solid black;
}
```

O `.container` é o elemento pai com `display: flex;`, e os `.item` são os elementos filhos que serão alinhados horizontalmente. O Flexbox oferece diversas propriedades para controlar o layout, como `justify-content`, `align-items`, `flex-direction`, entre outras. Um guia muito interessante sobre o tema pode ser encontrado em [CSS-Tricks](https://css-tricks.com/snippets/css/a-guide-to-flexbox/).

### Responsividade

A responsividade é a capacidade de um site se adaptar a diferentes tamanhos de tela, como smartphones, tablets e desktops. Para criar um design responsivo, é importante utilizar técnicas como media queries e unidades relativas, como porcentagens e `em`.

As media queries permitem aplicar estilos específicos com base nas características do dispositivo, como largura da tela, densidade de pixels, orientação, entre outros. Por exemplo, podemos definir um estilo diferente para telas menores que 600px:

```css
@media (max-width: 600px) {
    body {
        font-size: 14px;
    }
}
```

O código acima altera o tamanho da fonte do corpo da página para 14px em telas menores que 600px. As media queries são muito úteis para criar layouts responsivos e garantir uma boa experiência do usuário em diferentes dispositivos.

### Grid Layout

O Grid Layout é um sistema de layout bidimensional que permite criar designs complexos e alinhamentos de elementos em grade. Ele é ideal para criar layouts de páginas da Web com várias seções e áreas de conteúdo.

Para utilizar o Grid Layout, basta adicionar a propriedade `display: grid;` ao elemento pai e definir as áreas e tamanhos das células da grade. Por exemplo, podemos criar um layout de duas colunas e duas linhas com o seguinte código HTML e CSS:

```html
<div class="container">
    <div class="item">Item 1</div>
    <div class="item">Item 2</div>
    <div class="item">Item 3</div>
    <div class="item">Item 4</div>
</div>
```

```css
.container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto auto;
}

.item {
    padding: 10px;
    border: 1px solid black;
}
```

O `.container` é o elemento pai com `display: grid;`, e os `.item` são os elementos filhos que serão posicionados na grade. O Grid Layout oferece diversas propriedades para controlar o layout, como `grid-template-columns`, `grid-template-rows`, `grid-gap`, entre outras. Um guia completo sobre o Grid Layout pode ser encontrado em [CSS-Tricks](https://css-tricks.com/snippets/css/complete-guide-grid/).

## Adicionando Interatividade com JavaScript

O JavaScript é uma linguagem de programação usada para adicionar interatividade e dinamismo às páginas da Web. Ele permite manipular elementos HTML, responder a eventos do usuário e etc.

Por exemplo, podemos adicionar um botão que altera o texto de um parágrafo ao ser clicado com o seguinte código HTML e JavaScript:

```html
<button onclick="changeText()">Clique aqui</button>
<p id="demo">Este é um parágrafo.</p>
```

```javascript
function changeText() {
    document.getElementById("demo").innerHTML = "O texto foi alterado!";
}
```

O código acima define uma função `changeText()` que altera o conteúdo do parágrafo com o ID `demo` quando o botão é clicado. O JavaScript oferece diversas APIs e recursos para interagir com elementos da página, como `document`, `addEventListener`, `querySelector`, entre outros.

## Próximos Passos 🚀

Vamos discutir mais sobre HTML, CSS e Javascript nas próximas aulas, explorando conceitos avançados e práticas recomendadas para o desenvolvimento web. Nas aulas de Programação II vamos discutir também conceitos relacionados a frameworks e bibliotecas populares, como React, Angular e Vue.js.

## Praticando 🚀

Vamos criar uma página simples que apresente os conceitos discutidos sobre HTML, CSS e JavaScript. Você pode utilizar o VS Code para escrever o código e visualizar o resultado em um navegador. Experimente criar diferentes estilos, layouts e interações para aprimorar suas habilidades de desenvolvimento web.

Crie uma pasta chamada `aula2` e adicione os arquivos `index.html`, `styles.css` e `script.js` com o código necessário para a página. Você pode adicionar elementos como títulos, parágrafos, botões, imagens, links, entre outros, para explorar as possibilidades de criação de páginas da Web.

Na documentação da MDN você pode encontrar uma lista de elementos do HTML e suas propriedades, bem como tutoriais e guias para aprender mais sobre desenvolvimento web. (https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element)

## Desafio 🏆

Utilizando HTML e CSS vamos construir um e-mail marketing simples com título, imagens, textos e ao final um botão de chamada para ação (CTA). A ideia desse e-mail é promover o site construído na atividade anterior, pesquise por referências de e-mails marketing e tente criar algo atraente e responsivo.

## Referências 📚

- [MDN Web Docs](https://developer.mozilla.org/pt-BR/docs/Web)
- [CSS-Tricks](https://css-tricks.com/)
- [Flexbox Froggy](https://flexboxfroggy.com/)
- [Grid Garden](https://cssgridgarden.com/)
- [Stack Overflow](https://stackoverflow.com/)