## 1- Oque é uma função?
Nós utilizamos uma função para o codigo não ficar se reptindo varias vezes. Ela sera uma palavra que nós transformamos em uma função para conseguir puxar essa palavra mais de uma vez.
EX:
```php
$notaA = 10 //$notaA seria uma função
$notaB = 10
$media = ($notaA + $notaB) /2

echo "Sua média foi $media !!!";
```

---
---

## 2- Princípio DRY: Por que repetir o mesmo bloco de código em várias partes do sistema pode causar problemas de manutenção? Como uma função ajuda a evitar essa repetição?
Porque reptir o codigo varias vezes pode multiplicaros erros ocorrendo em multiplas alterações na intenção de concertar o codigo. O uso da função ajuda porque o codigo centraliza nessa parte, e você alterando ela você atualiza o codigo inteiro.

---
---

## 3-Parâmetros e retorno: Explique a diferença entre um parâmetro e um valor retornado por uma função. 

Os parâmetros $preco e $quantidade são os dados de entrada que servem para a função funcionar. O retorno (return $preco * $quantidade) é o dado de saída ou seja, o resultado final devolvido por ela.

```php
function calcularTotal(float $preco, int $quantidade): float {  //parametro
    return $preco * $quantidade;  //retorno
}
```

