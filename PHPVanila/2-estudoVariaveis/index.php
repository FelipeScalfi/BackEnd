<?php 
declare(strict_types=1); // blinda o sistema contra misturas acidentais de tipos de dados
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de Variáveis </title>
</head>
<body>
    <h3>Estudo de Variáveis</h3>
    <?php
   
    // Sintaxe de variáveis em PHP
    //Variaveis são representadas pelo simbolo "$" seguindo do nome da variável
    // Exemplo :
    $nome = "João"; // Variáveis do tipo String
    $idade = 25; // Variável do tipo Number
    $status = true; // Variável do tipo boolean
    $altura = 1.75; // Variável do tipo number (float)
    $email = null; // Variável do tipo null
    #$endereco; não é possivel declarar uma variável sem atribuir um valor a ela, não existe Undefined em PHP 

    // Exibir as variáveis na tela 
    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Status: $status <br>";
    echo "Altura: $altura <br>";
    echo "Email: $email <br>";

    echo "<br> <h3> Constantes </h3> <br>";

    //constates são representadas pela palavra "const" ou "define" seguida do nome da constate
    //exemplos de constates
    const PI = 3.14; //Constate do tipo number (float)
    const EMPRESA = "Google"; //Constante do tipo String
    define("SITE", "www.google.com"); //Constante do tipo String
    // Uma das boas praticas no uso das constates é utilizar letras maiusculas para nomear constates, para diferenciar das variáveis

    //Exibir as constates na tela
    echo "Valor de PI: " . PI . "<br>";
    echo "Nome da empresa: " . EMPRESA . "<br>";
    echo "Site: " . SITE . "<br>";
    
    // Tentando alterar o valor de uma constante, isso irá gerar um erro, pois constantes não podem ser alteradas
    // PI = 3.14159; //Isso é um erro
    //Redeclarar uma constate tambem irá gerar um erro.
    
    //Regra de ouro: Sempre colque a instrução declare(strict_types=1); no inci do codigo PHP,
    //Isso blinda seu sistema contra mistura acidentais de dados.

    // Utilização de textos ( Concatenação vs Interpolação)
    //exemplo de Concatenação -> juntar duas ou mais string utilizando o operador "." (ponto)
echo "Ola, " . $nome . "! Seja bem-vindo ao nosso site !<br>";

//Exemplo de interpolação -> Utilização de váriaveis dentro de um texto, utilizando aspas duplas
echo " $nome, tem $idade anos e sua altura é, $altura metros. <br>"; //Forma mais correta de mistrar texto e variáveis

    ?>
</body>
</html>