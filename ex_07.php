<!-- Exercício 07 – Sistema de Descontos
Uma loja virtual oferece descontos conforme o valor da compra.
Crie uma função chamada calcularDesconto() que receba o valor total da compra e aplique as seguintes regras:
● Até R$ 100,00: sem desconto;
● Acima de R$ 100,00: 10%;
● Acima de R$ 500,00: 20%;
● Acima de R$ 1.000,00: 30%.
Retorne o valor original, o desconto aplicado e o valor final da compra. -->

<?php 

function calcularDesconto($valor){

    $compra = $valor;

    if($compra <= 100){
        $final = $compra;
    }
    elseif($compra <= 500){
        $final = $compra * 0.9;
    }
    elseif($compra <= 1000){
        $final = $compra * 0.8;
    }
    else{
        $final = $compra * 0.7;
    }

    echo 'O valor total da compra é ' . $final;

}

$valor = 100;

calcularDesconto($valor);

?>