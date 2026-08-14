<?php
declare(strict_types=1)
?>
<?php
$peso = 54.02;
$aultura = 1.65;

$imc = $peso / ($aultura * $aultura);

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc >= 18.5 ) {
    echo "Peso normal";
} elseif ($imc >= 25 ) {
    echo "Sobrepeso";
} elseif ($imc >= 30 ) {
    echo "Obesidade grau I";
} elseif ($imc >= 35 ) {
    echo "Obesidade grau II";
} else {
    echo "Obesidade grau III";
}
?>