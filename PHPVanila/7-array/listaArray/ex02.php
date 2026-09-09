<?php
declare (strict_types=1);

// Exercício 2: Perfil do Usuário

$usuario = [
    "nome" => "Carlos Eduardo",
    "idade" => 28,
    "cidade" => "Americana",
    "estado" => "SP",
    "premium" => true
];
?>

<div style="border: 1px solid #5381d6; padding: 20px; width: 300px; border-radius: 10px;">
    <h2>
        <?php
        echo $usuario["nome"];

        if ($usuario["premium"]) {
            echo "⭐";
        }
        ?>
    </h2>

    <p> <strong>Idade:</strong> <?php echo $usuario["idade"]; ?> anos </p>

    <p>
        <strong>Localização:</strong>
        <?php echo $usuario["cidade"] . " - " . $usuario["estado"]; ?>
    </p>
</div>