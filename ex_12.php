<!-- Um supermercado deseja organizar automaticamente seu catálogo de produtos.
Crie uma função chamada analisarProdutos() que receba um vetor contendo o
nome e o preço dos produtos.
A função deverá retornar:
● Produto mais caro;
● Produto mais barato;
● Média dos preços;
● Pesquisa de um produto informado pelo usuário. -->

<?php
function analisarProdutos($produtos, $produtoPesquisado){

    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $somaPrecos = 0;
    $produtoEncontrado = null;

    foreach ($produtos as $produto){

        if ($produto["preco"] > $maisCaro["preco"]){
            $maisCaro = $produto;
        }

        if ($produto["preco"] < $maisBarato["preco"]){
            $maisBarato = $produto;
        }

        $somaPrecos += $produto["preco"];

        if (strtolower($produto["nome"]) == strtolower($produtoPesquisado)){
            $produtoEncontrado = $produto;
        }

    }

    $mediaPrecos = $somaPrecos / count($produtos);

    return [
        "mais_caro" => $maisCaro,
        "mais_barato" => $maisBarato,
        "media_precos" => $mediaPrecos,
        "pesquisado" => $produtoEncontrado
    ];

}

$produtos_usuario = [
    ["nome" => "Arroz", "preco" => 15.50],
    ["nome" => "Feijão", "preco" => 6.50],
    ["nome" => "Óleo", "preco" => 7.90],
    ["nome" => "Carne", "preco" => 32.00]
];

$resultado = analisarProdutos($produtos_usuario, "Carne");
echo "Produto mais caro: " . $resultado["mais_caro"]["nome"] . " - R$ " . $resultado["mais_caro"]["preco"] . "<br>";
echo "Produto mais barato: " . $resultado["mais_barato"]["nome"] . " - R$ " . $resultado["mais_barato"]["preco"] . "<br>";
echo "Média dos preços: R$ " . number_format($resultado["media_precos"], 2, ",", ".") . "<br>";
if ($resultado["pesquisado"]){
    echo "Produto pesquisado encontrado: " . $resultado["pesquisado"]["nome"] . " - R$ " . $resultado["pesquisado"]["preco"] . "<br>";
} else {
    echo "Produto pesquisado não encontrado.<br>";
}
?>