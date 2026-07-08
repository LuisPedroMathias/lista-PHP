<!-- Exercício 03 – Cadastro Seguro
Um sistema de cadastro precisa proteger informações sensíveis dos usuários.
Crie uma função chamada mascararCpf() que receba um CPF e substitua todos os caracteres por *, mantendo visíveis apenas os quatro últimos dígitos.
Retorne o CPF mascarado  -->

<?php 

function mascararCpf($cpf){

$numbers = substr ($cpf, -4);
$censurado = "*******".$numbers;

echo "O seu cpf é: ".$censurado;

}

$cpf = "12345678900";

mascararCpf($cpf);

?>
