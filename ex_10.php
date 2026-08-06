<!-- Uma escola precisa automatizar o cálculo das médias dos estudantes.
Crie uma função chamada calcularMedia() que receba um vetor contendo as notas de um aluno.
A função deverá retornar:
● Maior nota;
● Menor nota;
● Média;
● Situação final (Aprovado, Recuperação ou Reprovado). -->

<?php

function calcularMedia($notas) {
    $maiorNota = max($notas);
    $menorNota = min($notas);
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = 'Aprovado';
    } elseif ($media >= 5) {
        $situacao = 'Recuperação';
    } else {
        $situacao = 'Reprovado';
    }

    return [
        'maior_nota' => $maiorNota,
        'menor_nota' => $menorNota,
        'media' => $media,
        'situacao' => $situacao
    ];
}

$notas = [8.5, 7.0, 6.5, 9.0, 5.5];
$resultado = calcularMedia($notas);

echo "Maior nota: " . $resultado['maior_nota'] . PHP_EOL;
echo "Menor nota: " . $resultado['menor_nota'] . PHP_EOL;
echo "Média: " . $resultado['media'] . PHP_EOL;

echo "Situação final: " . $resultado['situacao'] . PHP_EOL;

?>