## Parte A: Exercícios Teóricos de Fixação

1- Diferença Estrutural: Explique a diferença física entre onde os dados são anexados em uma requisição GET e em uma requisição POST.

**resposta** :A diferença é que o GET coloca os dados na URL, deixando-os visíveis no endereço. Já o POST envia os dados no corpo da requisição, sem aparecer diretamente na URL.

2- Segurança e Privacidade: Por que senhas de usuário nunca devem ser enviadas via método GET? Cite pelo menos dois locais onde essa senha ficaria gravada de forma insegura.

**resposta**: As senhas não devem ser enviadas pelo método GET, porque ficam visíveis na URL. Assim, podem ser salvas no histórico do navegador e nos logs do servidor, o que pode colocar a senha em risco. Para enviar senhas, é melhor usar POST com HTTPS.

3- Coalescência Nula: Por que a instrução $nome = $_POST['nome']; dispara um Warning na primeira vez que a página é carregada no navegador? Como o operador ?? resolve isso?

**resposta**: Quando a página abre pela primeira vez, o campo nome ainda não foi enviado pelo formulário. Por isso, o PHP dá um Warning, pois não encontra esse valor. O `??` evita esse problema, colocando um valor padrão caso o campo não exista:
```php
$nome = $_POST['nome'] ?? '';
```
Assim, se o nome não for enviado, ele recebe um valor "null" e a página não apresenta o Warning.

4-Idempotência: O que significa dizer que uma requisição GET é idempotente? Por que atualizar ou deletar dados no banco usando links GET é uma má prática de segurança?

**resposta**: Uma requisição GET é idempotente quando pode ser feita várias vezes sem mudar o resultado. Ela serve principalmente para buscar informações.
Usar GET para atualizar ou apagar dados não é bom porque alguém pode clicar no link sem querer e acabar mudando ou apagando informações do banco de dados.

5-Validação Client vs Server: Um desenvolvedor júnior afirma que o formulário dele é 100% seguro porque colocou required e type="email" em todas as tags HTML. Explique por que essa afirmação é falsa.

**resposta**: A afirmação é falsa porque required e type="email" fazem a validação apenas no navegador. Essas regras podem ser burladas, por isso o servidor também precisa validar os dados para garantir a segurança.

6-XSS e Sanitização: Qual é o risco de exibir dados vindos de um $_POST diretamente na tela sem utilizar htmlspecialchars()?

**resposta**:O risco é sofrer um ataque XSS, onde um usuário mal-intencionado pode enviar um código malicioso e ele ser executado no navegador de outras pessoas. O htmlspecialchars() ajuda a impedir isso, transformando o código em texto comum.

7-Sticky Forms: O que é a técnica de Sticky Forms e qual é o seu impacto na experiência do usuário (UX)?

**resposta**:Sticky Forms é uma técnica que mantém os dados que o usuário já digitou no formulário mesmo depois de um erro,
isso melhora a experiência do usuário porque ele não precisa preencher tudo novamente, tornando o formulário mais rápido e fácil de usar.

8-DevTools: Como você utilizaria a aba Network do navegador para comprovar que um formulário foi enviado via POST e não via GET?

**resposta**:Na aba Network do DevTools, você envia o formulário e clica na requisição que apareceu. No campo Request Method, estará escrito POST se o formulário foi enviado por POST. Se fosse GET, apareceria GET.