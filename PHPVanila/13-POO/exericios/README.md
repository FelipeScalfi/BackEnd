# LISTA DE EXERCÍCIOS DE FIXAÇÃO E PRÁTICA

## Parte A: Questões Teóricas de Fixação

## 1. Quais são os três principais riscos técnicos de manter regras financeiras críticas implementadas puramente através de arrays associativos e scripts procedurais?

R: Os três principais riscos são a falta de segurança dos dados, a dificuldade de manutenção do código e a possibilidade de regras financeiras inconsistentes, como permitir saques ou transferências sem as validações necessárias.


## 2. O que ocorre na memória Heap do servidor quando a instrução `new` `ContaCorrente(...)` é executada? Qual é o papel do método `__construct()` nesse processo?

R: Quando executamos `new ContaCorrente(...)`, um objeto é criado na memória Heap do servidor. O método `__construct()` é executado automaticamente para inicializar o objeto, recebendo os valores necessários, como o titular e o saldo inicial.


## 3. `$this`: Explique por que o comando `$this->saldo` é obrigatório para acessar um atributo dentro da classe, diferenciando-o de uma variável local `$saldo`.

R: O `$this` representa o objeto atual e permite acessar seus atributos e métodos. `$this->saldo` acessa o atributo `saldo` do objeto, enquanto `$saldo` representa uma variável local, que existe apenas no contexto em que foi declarada.


## 4. Por que um desenvolvedor sênior de back-end nunca deve criar um método `public function setSaldo(float $novoSaldo)` para uma conta bancária?

R: Porque esse método permitiria alterar o saldo diretamente, sem validar as regras financeiras. Isso poderia gerar valores invalidos e comprometer a segurança da conta. O ideal é permitir alterações por meio de operações como deposito, saque e transferência, respeitando as regras do sistema.
 


## 5. Qual é a diferença prática entre os modificadores `private` e `protected` quando subclasses entram em cena através do `extends`?

R: O modificador `private` permite o acesso direto somente dentro da própria classe. Já o `protected` permite o acesso dentro da própria classe e também nas classes filhas. Por exemplo, uma classe `ContaCorrente` pode acessar diretamente um atributo `protected` herdado de `ContaBancaria`, mas não um atributo `private` dessa classe.



## 6.  Como o recurso de promoção de propriedades introduzido no PHP 8 reduz o *boilerplate* e melhora a legibilidade do código?

R: Esse recurso permite declarar e inicializar atributos diretamente nos parametros do construtor. Assim não é necessario declarar os atributos separadamente nem atribuir manualmente cada parâmetro, reduzindo a repetição de código e melhorando a legibilidade.


## 7.   Explique o mecanismo de segurança proporcionado pela palavra-chave `readonly` em atributos de classes de valor como `Titular` ou `CPF`

R: A palavra chave `readonly` impede que uma propriedade seja modificada novamente depois de inicializada respeitando as regras do PHP. Isso ajuda a proteger informações como nome e CPF contra alterações acidentais.


## 8. Por que faz todo sentido no modelo bancário que a classe `ContaBancaria` seja declarada como `abstract` enquanto `ContaCorrente` e `ContaPoupanca` são classes concretas?

R: Porque `ContaBancaria` representa um modelo geral de conta, com atributos e métodos comuns, mas não precisa ser instanciada diretamente. Já `ContaCorrente` e `ContaPoupanca` representam tipos específicos de contas e podem ser instanciadas, implementando suas proprias regras.


## 9. Como o método `transferir(float $valor, ContaBancaria $destino)` consegue operar transferências entre quaisquer tipos de contas filhas sem precisar saber qual é a classe exata da conta de destino?

R: Isso acontece por meio do polimorfismo. Como `ContaCorrente` e `ContaPoupanca` herdam de `ContaBancaria`, o metodo pode receber qualquer uma delas como destino. 


## 10. Por que é uma péssima prática retornar `false` ou `null` quando uma operação de saque é rejeitada por falta de saldo?

R: Porque retornar `false` ou `null` não informa claramente o motivo da falha. Utilizar uma exceção especifica como `SaldoInsuficienteException`, permite identificar o problema e tratalo adequadamente evitando que a operação seja concluida incorretamente.