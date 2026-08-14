<?php
declare(strict_types=1)
?>
<?php
$cargoUsuario = "Gerente";
$senhhaDigitada = "123456";
$senhaSistema = "senhaSegura123";
if ($cargoUsuario == "Gerente" && $senhhaDigitada == $senhaSistema) {
    echo "Acesso permitido";
} else {
    echo "Acesso negado";
}