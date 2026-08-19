<?php 
$cargorariaCliente = 'A';
$dividaAtual = 1000;

$taxa = match($cargorariaCliente) {
    'A' => 0.01,
    'B' => 0.02,
    'C' => 0.03,
    default => 0.05,
};

echo "Taxa: " . ($taxa * 100) . "%";

for ($mes = 1; $mes <= 12; $mes++) {

    if ($mes == 6) {
        echo "Mês 6: Isenção de juros (Anistia)";
        continue;
    }

$juros = $dividaAtual * $taxa;
$dividaAtual = $dividaAtual + $juros;

echo 
"\nMês $mes : Juros R$ $juros | Saldo R$ $dividaAtual";
}
?>