## Parte A: Exercícios Teóricos de Fixação


**1. Definição de CRUD:**
 CRUD significa **Create, Read, Update e Delete**.No SQL, ele corresponde a: **Create -> INSERT**, para cadastrar dados; **Read -> SELECT**, para consultar dados; **Update -> UPDATE**, para alterar dados; e **Delete -> DELETE**, para excluir dados.

**2. Anatomia do SQL Injection:**  
O SQL Injection acontece quando o sistema coloca diretamente um valor do usuário dentro de uma consulta SQL usando concatenação. O atacante pode digitar um conteúdo preparado para alterar a consulta original. Assim, em vez de o banco interpretar o texto apenas como um dado, ele pode interpretar parte dele como um comando SQL.

**3. Mecanismo das Prepared Statements:**  
As `Prepared Statements` separam a consulta SQL dos dados enviados pelo usuário. Primeiro o banco recebe a estrutura da consulta com `prepare()` e depois recebe os valores com `execute()`. Dessa forma, o que o usuário digitou é tratado como dado, e não como parte do comando SQL.

**4. Marcadores Nomeados:**  
Marcadores como `:sku` e `:preco` deixam o código mais fácil de entender porque mostram qual valor será colocado em cada lugar. Em consultas grandes, isso facilita a leitura e diminui a chance de colocar um valor no lugar errado.

**5. Diferença entre Bindings:**  
R. `bindValue` prende o valor atual de uma variável ao parâmetro. Já `bindParam` prende o parâmetro à variável, então o valor da variável pode ser alterado antes do `execute`, e o novo valor será usado. Para situações simples, `bindValue` costuma ser mais fácil de entender.

**6. Tipagem no PDO:**  
Se o tipo não for informado corretamente, um valor que deveria ser numérico pode ser tratado de outra forma. Isso pode causar erros ou comportamentos inesperados, principalmente em comandos como `LIMIT`. Usar `PDO::PARAM_INT` deixa claro que o valor deve ser um número inteiro.

**7. Padrão DAO:**  
O DAO separa o código responsável pelo acesso ao banco do restante da aplicação. Assim, as consultas SQL ficam concentradas em uma classe própria. Isso facilita a manutenção e segue o princípio da "responsabilidade única", pois cada parte do sistema fica responsável por uma função específica.

**8. Operações de Update:**  
Um `UPDATE` sem `WHERE` pode alterar todos os registros da tabela. Por exemplo, se a intenção era alterar apenas o preço de um produto, mas o `WHERE` for esquecido, o preço de todos os produtos poderá ser alterado. Por isso, em produção, esse erro pode causar uma grande perda ou alteração indevida de dados.

**9. Impacto da LGPD:**  
Um vazamento de dados pessoais causado por uma falha de segurança, como SQL Injection, pode gerar consequências para a "organização". Dependendo do caso, podem existir "advertências, multas, bloqueio ou eliminação dos dados envolvidos e outras sanções previstas na LGPD". Além das penalidades legais, a empresa pode ter prejuízos financeiros, problemas de reputação e perda de confiança dos clientes.

