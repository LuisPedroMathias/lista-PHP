<!-- Uma empresa deseja padronizar automaticamente seus relatórios.
Crie uma função chamada formatarTexto() que receba um texto e retorne:
● O texto totalmente em letras maiúsculas;
● O texto totalmente em letras minúsculas;
● A primeira letra de cada palavra em maiúscula;
● A quantidade total de caracteres. -->

<?php
function formatarTexto($texto){

    $maiusculo = strtoupper($texto);

    $minusculo = strtolower($texto);

    $primeiraLetraMaiuscula = ucwords(strtolower($texto));

    $quantidadeCaracteres = strlen($texto);

    return [
        "maiusculo" => $maiusculo,
        "minusculo" => $minusculo,
        "capitalizado" => $primeiraLetraMaiuscula,
        "quantidade_caracteres" => $quantidadeCaracteres
    ];

}

$texto_usuario = "Eu amo desenvolvimento de sistemas.";
$resultado = formatarTexto($texto_usuario);
echo "Texto original: $texto_usuario <br>";
echo "Maiúsculo: " . $resultado["maiusculo"] . "<br>";
echo "Minúsculo: " . $resultado["minusculo"] . "<br>";
echo "Capitalizado: " . $resultado["capitalizado"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidade_caracteres"] . "<br>";
?>
