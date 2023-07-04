# Sistema de Gerenciamento de Tarefas (API)

Este é um sistema de gerenciamento de tarefas desenvolvido utilizando Laravel, que fornece uma API para realizar operações básicas de criação, leitura, atualização e exclusão (CRUD) de tarefas.

## Requisitos

A API é capaz de lidar com as seguintes operações:

- Listar todas as tarefas
- Obter detalhes de uma tarefa específica
- Criar uma nova tarefa
- Atualizar os dados de uma tarefa existente
- Excluir uma tarefa

Cada tarefa contém as seguintes informações:

- Título (obrigatório)
- Descrição (obrigatório)
- Status (concluída ou não concluída)

A API segue as práticas recomendadas para design de APIs RESTful e utiliza os métodos HTTP adequados para cada operação. A resposta da API está no formato JSON.

## Rotas disponíveis

### Listar todas as tarefas

- Método: GET
- URL: /api/tasks
- Resposta esperada: JSON contendo todas as tarefas registradas no sistema.

### Obter detalhes de uma tarefa específica

- Método: GET
- URL: /api/tasks/{id}
- Parâmetros:
  - {id}: ID da tarefa desejada
- Resposta esperada: JSON contendo os detalhes da tarefa com o ID especificado.

### Criar uma nova tarefa

- Método: POST
- URL: /api/tasks
- Parâmetros:
  - Título (campo obrigatório)
  - Descrição (campo obrigatório)
  - Status (campo obrigatório, com opções: "concluída" ou "não concluída")
- Resposta esperada: JSON contendo os detalhes da nova tarefa criada.

### Atualizar os dados de uma tarefa existente

- Método: PUT
- URL: /api/tasks/{id}
- Parâmetros:
  - {id}: ID da tarefa a ser atualizada
  - Título
  - Descrição
  - Status
- Resposta esperada: JSON contendo os detalhes da tarefa atualizada.

### Excluir uma tarefa

- Método: DELETE
- URL: /api/tasks/{id}
- Parâmetros:
  - {id}: ID da tarefa a ser excluída
- Resposta esperada: JSON indicando que a tarefa foi excluída com sucesso.

## Validações

As seguintes validações são aplicadas antes de executar as operações no banco de dados:

- O título e a descrição da tarefa são campos obrigatórios.
- O status da tarefa deve ser válido e pode ser "concluída" ou "não concluída".

## Testando a API

[![Teste API Task Manager](https://img.youtube.com/vi/a7EMJfvUhP0/0.jpg)](https://youtu.be/a7EMJfvUhP0)

Recomenda-se utilizar uma ferramenta de testes de API, como o Postman ou o Insomnia, para testar a funcionalidade da API.

Certifique-se de ter os endpoints corretos, os parâmetros adequados e verifique as respostas recebidas da API.

## Ambiente de Desenvolvimento

Para configurar o ambiente de desenvolvimento, siga as etapas abaixo:

1. Clone o repositório do projeto.
2. Instale as dependências do Laravel executando o comando `composer install`.
3. Crie um arquivo `.env` baseado no arquivo `.env.example` e configure as informações do banco de dados.
4. Gere uma nova chave do aplicativo executando o comando `php artisan key:generate`.
5. Execute as migrações do banco de dados e alimente-o com os dados iniciais utilizando o comando `php artisan migrate --seed`.
6. Inicie o servidor de desenvolvimento com o comando `php artisan serve`.
7. Agora você pode fazer solicitações para a API usando o URL fornecido pelo servidor de desenvolvimento.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir problemas ou enviar solicitações pull para melhorar este sistema de gerenciamento de tarefas.

## Licença

Este projeto está licenciado sob a MIT License.
