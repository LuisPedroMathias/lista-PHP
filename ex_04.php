<!-- Exercício 04 – Gerador de Senhas
Uma empresa deseja gerar senhas temporárias para seus colaboradores.
Crie uma função chamada gerarSenha() que receba a quantidade de caracteres desejada e retorne uma senha aleatória contendo letras maiúsculas, minúsculas, números e caracteres especiais. -->

<?php

function gerarSenha($numero)
{

    $MA = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $mi = 'abcdefghijklmnopqrstuvwxyz';
    $nu = '0123456789';
    $ca = '!@#$%&*+-.';

    $senha = '';
    $n = $numero + 1;

    for ($i = 0; $i < $n; $i++) {

        $senha .= $MA[rand(0, 25)];
        $i++;

        if ($i <= $n) {

            $senha .= $mi[rand(0, 25)];
            $i++;
        }
        if ($i <= $n) {

            $senha .= $nu[rand(0, 9)];
            $i++;
        }
        if ($i <= $n) {

            $senha .= $ca[rand(0, 9)];
            $i++;
        }
    }
    echo $senha;
}


$numero = 4;

gerarSenha($numero);

?>