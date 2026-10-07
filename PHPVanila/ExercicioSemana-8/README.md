### Parte A — Respostas

## 1. Abstração de Dados:  
PDO é uma ferramenta do PHP usada para fazer conexão com bancos de dados. Ele é bom porque facilita o trabalho com diferentes bancos e também possui recursos de segurança, como os *prepared statements*.

## 2. Ciclo do DSN:  
DSN é uma informação que diz ao PHP onde está o banco de dados.  
- `host`: informa onde está o banco, como `localhost`.
- `port`: informa a porta usada pelo banco.
- `dbname`: informa o nome do banco que será acessado.

## 3. Padrão de Portas: 
A porta padrão do PostgreSQL é **5432**. Ela é colocada na conexão assim: `port=5432`.

##4. Flags de Integridade:  
`PDO::ERRMODE_EXCEPTION` faz o PHP mostrar uma exceção quando acontece algum erro na conexão ou consulta. Sem essa configuração, o PDO normalmente não mostra o erro dessa forma e o programador precisa verificar o erro manualmente.

## 5. Fetch Mode:  
`PDO::FETCH_ASSOC` faz os dados serem retornados usando o nome das colunas. Isso evita informações repetidas e pode ajudar a diminuir o uso de memória.

## 6. Padrão Singleton:  
Se criarmos uma nova conexão com `new PDO()` para cada consulta, podemos abrir muitas conexões com o banco. O PostgreSQL possui um limite de conexões chamado `max_connections`. Se esse limite for atingido, novas conexões podem ser recusadas.

## 7. Encapsulamento do Singleton: 
O construtor é `private` para impedir que outras partes do programa criem várias conexões usando `new`. Também podemos bloquear o `__clone()` e o `__wakeup()` para evitar que a conexão seja duplicada.

##8. Segurança de Credenciais:  
Não devemos colocar usuário e senha diretamente no código porque outras pessoas podem ter acesso a esses dados, principalmente se o projeto for enviado para o GitHub. O ideal é guardar essas informações em variáveis de ambiente ou em um local protegido.

##9. Tratamento de Exceções e LGPD:
Não é seguro mostrar `$e->getMessage()` diretamente para o usuário porque a mensagem pode revelar informações sobre o banco e o servidor. O correto é guardar o erro para o desenvolvedor e mostrar apenas uma mensagem simples, como: **"Ocorreu um erro ao conectar ao banco de dados."**