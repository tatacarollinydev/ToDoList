# Gerenciados de tarefas - ToDoList 📑

 ***Este projeto foi desenvolvido com muito esforço e dedicação, inspirado no tutorial do canal Monolito PHP.
  Aqui, você encontrará uma breve explicação das funcionalidades do projeto e como as principais funções do PHP foram utilizadas para torná-lo possível.***

 ## Funcionalidades Principais🛠️

 ### 1. Adicionar Tarefas ✅:

Você pode facilmente adicionar novas tarefas à sua lista de afazeres. Basta preencher o formulário e clicar em "Adicionar Tarefa".

### 2. Visualizar Tarefas 📲:

Todas as tarefas adicionadas são exibidas em uma lista fácil de ler, mostrando o título da tarefa e seu status (concluída ou pendente).

### 4. Remover Tarefas ❌:

Se as tarefas não forem mais necessárias você pode removê-las da lista com apenas um clique.


## Recursos PHP Utilizados 🐘:


| Recurso | Descrição |
| ------- | --------- |
| isset( )         | Utilizado para verificar se uma variável está definida e não é nula, garantindo que as operações sejam realizadas apenas quando necessário.  |
| $SESSION[ ]      | Essencial para manter informações do usuário entre diferentes requisições, como o estado das tarefas adicionadas. |
| foreach( )       |Empregado para iterar sobre os elementos de um array, neste caso, utilizado para percorrer a lista de tarefas e exibi-las dinamicamente.  |
| session_start() | Inicia uma nova sessão ou retoma uma existente, permitindo o uso das variáveis de sessão $_SESSION para armazenar dados importantes do usuário.  |
| array( )         | Utilizado para criar arrays, estrutura de dados fundamental para armazenar e manipular as tarefas do gerenciador. |
| $_GET[ ]         | Usado para acessar dados enviados via método GET, neste caso, para obter informações sobre as tarefas a serem manipuladas.  |
| array_push( )    | Adiciona um ou mais elementos ao final de um array, utilizado para inserir novas tarefas na lista. |
| var_dump( )      | Função de depuração que exibe informações sobre uma variável ou expressão, útil para entender a estrutura e conteúdo dos dados durante o desenvolvimento. |
| unset( )         | Remove uma variável ou índice específico de um array, utilizado neste projeto para remover tarefas da lista quando necessário.  |
