<?php 
declare(strict_types=1);

//Declaração das variaveis
$email="";
$loginValido = false;
$erros=[];

//Pegar os dados do formulario

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = trim($_POST["email"] ?? "");//Limpar os espaços vazios antes e dopois do texto
    $senha = trim($_POST["senha"] ?? "");

    //validação de dados
    if($email === "" || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $erros["email"] = "Informe um Email Válido.";
    }

    if(strlen($senha) < 6){
        $erros["senha"] = "A Senha Deve Ter No minimo 6 digitos !";
    }

     //Se senha e email estão OK
    if(empty($erros)){
        $emailCorreto = "admin@senai.br";
        $senhaCorreta = "senhaSegura123";

        // validando o email e a senha
        if($email === $emailCorreto && $senha ==$senhaCorreta){
            $loginValidado = true;
        } else{
            $erros["login"] = "Credenciais Inválidas!";
        }
    }
}
?>