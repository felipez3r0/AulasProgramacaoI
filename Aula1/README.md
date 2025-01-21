# Aula 1 - Versionamento de Código com Git

## O que é Git?

Git é um sistema de controle de versão distribuído, gratuito e de código aberto, projetado para lidar com tudo, desde projetos pequenos a muito grandes, com rapidez e eficiência.
Foi criado por Linus Torvalds em 2005 para desenvolver o kernel do Linux.

## Por que usar Git?

- **Controle de versão**: Git permite que você mantenha um histórico de todas as alterações feitas em seu código.
- **Colaboração**: Git facilita o trabalho em equipe, permitindo que várias pessoas trabalhem no mesmo projeto.
- **Rastreamento de alterações**: Git permite que você saiba quem fez o que e quando.
- **Experimentação**: Git permite que você experimente novas ideias sem comprometer o projeto principal.

## Comandos Básicos

- `git init`: Inicializa um repositório Git.
- `git add <arquivo>`: Adiciona um arquivo ao índice (staging area).
- `git commit -m "mensagem"`: Salva as alterações no repositório.
- `git status`: Mostra o estado atual do repositório.
- `git log`: Mostra o histórico de commits.

## gitignore

O arquivo `.gitignore` é usado para especificar arquivos e diretórios que devem ser ignorados pelo Git. Isso é útil para evitar que arquivos desnecessários sejam incluídos no repositório.

Exemplo de `.gitignore`:

```plaintext
# Arquivos temporários
*.tmp

# Diretórios
node_modules/

# Arquivos de configuração
.env
```

## Branches

Branches são ramificações do código principal que permitem que você trabalhe em novas funcionalidades sem afetar o projeto principal. Isso é útil para experimentar novas ideias e manter o código principal estável.

### Comandos Básicos de Branches

- `git branch`: Lista as branches existentes.
- `git branch <nome>`: Cria uma nova branch.
- `git checkout <nome>`: Muda para a branch especificada.
- `git merge <nome>`: Mescla a branch especificada na branch atual.
- `git branch -d <nome>`: Deleta a branch especificada.

## Fluxo de Trabalho

1. Modifique os arquivos do seu projeto.
2. Adicione os arquivos modificados ao índice.
3. Faça um commit das alterações.
4. Repita o processo sempre que fizer uma alteração significativa.

## Trabalhando com PRs

### O que é um PR?

PR (Pull Request) é uma solicitação de alteração que você envia para o repositório principal. Ele permite que outras pessoas revisem e discutam as alterações propostas antes de mesclá-las.

### Como criar um PR?

1. Faça um fork do repositório. (Caso não tenha permissão de escrita)
2. Clone o repositório para o seu computador.
3. Crie uma nova branch para suas alterações.
4. Faça as alterações desejadas.
5. Adicione, comite e envie as alterações para o seu repositório.
6. Crie um PR no repositório principal.

### Quais são as vantagens de usar PRs?

- **Revisão de código**: Outras pessoas podem revisar suas alterações e fornecer feedback.
- **Discussão**: Você pode discutir as alterações propostas antes de mesclá-las.
- **Rastreamento**: Você pode acompanhar o progresso das alterações e quem as fez.

## Praticando 🚀

### Atividade 1

1. Crie um repositório Git.
2. Adicione um arquivo README.md com uma breve descrição do projeto.
3. Adicione um arquivo .gitignore para ignorar arquivos desnecessários.
4. Faça um commit das alterações.

### Atividade 2

1. Crie uma nova branch chamada `feature`.
2. Adicione um novo arquivo ao projeto.
3. Faça um commit das alterações.
4. Crie um PR para mesclar as alterações na branch principal.

## Referências 📚

- [Documentação do Git](https://git-scm.com/doc)
- [Tutoriais - Atlassian Git](https://www.atlassian.com/git/tutorials)
- [Guias do GitHub](https://docs.github.com/pt)