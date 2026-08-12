<?php 
declare(strict_types=1);

//Motor de analise de crédito

//regras do negocio:
// Regra da idade : O cliente precisa ter 18 anos ou mais e menos de 70
//Regra da parcela (renda) :O valor da parcela do emprestimo Não pode ser maior que 30% da renda mensal do cliente
// Regra VIP: Se o cliente tiver um "Score de Crédito" maior que 800, ele tem aprovação automática. (As Regras de idade e Renda não importam)
// Aprovação Final: O Crédito é liberado se (Regra1 e Regra2 forem superadas) OU Se (Regra 3 passar).

//1. Dados que vieram 
$identidadeCliente = 25;
$rendaMensal = 4000.00;
$valorDoEmprestimo = 10000.00;
$numerosDeParcelas = 24;
$scoreCredito = 750; //Pontuação vai de 0 a 1000

//2. Calculos aritméticos
$taxadeJuros = 0.02; //juros de 2 ao mês
$valorjurostotal = $valorDoEmprestimo * $taxadeJuros * $numerosDeParcelas;
$valorTotalPagar =  $valorDoEmprestimo * $valorjurostotal; 
$valorParcela = $valorTotalPagar / $numerosDeParcelas;

//3. O cerébro da Operação: Avaliação das regras de negócio
//Regra 1: Maior igual a 18 e Menor que 70
$idadeValida = ($identidadeCliente>=18) && ($identidadeCliente<70);

//Regra 2: Parcela não pode ser maior que 30% da renda (renda*0.30)
$limiteRenda = $rendaMensal * 0.30;
$rendaSuficiente = $valorParcela <= $limiteRenda;

//Regra 3: Cliente VIP (Score maior que 800)
$isClienteVip = $scoreCredito > 800 ;

//Aprovação final
$aprovado =($idadeValida && $rendaSuficiente) || $isClienteVip;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação de Crédito</title>
</head>
<body>
    <h2>analise de crédito</h2>
    <hr>
    <?php echo "<h4>Valor da parcela: R$ " . number_format($valorParcela, 2,",",".") . "</h4>"; ?>
    <h4>Idade Válida: <?php echo ($idadeValida ? "sim" : "não") ?></h4>
    <h4>Renda Suficiente: <?php echo ($rendaSuficiente ? "sim" : "não") ?></h4>
    <h4>Cliente VIP: <?php echo ($isClienteVip ? "sim" : "não") ?></h4>
    <h4>Resultado Final: <?php echo ($aprovado ? "sim" : "não") ?></h4>

</body>
</html>