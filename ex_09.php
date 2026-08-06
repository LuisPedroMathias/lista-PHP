<!-- Uma plataforma de ensino deseja verificar algumas propriedades dos números informados pelos alunos.
Crie uma função chamada analisarNumero() que receba um número inteiro e informe se ele é:
● Par ou ímpar;
● Primo ou não;
● Perfeito ou não.
Retorne a todas essas informações. -->

<?php

function analisarNumero($numero) {
    $resultado = [];

    if ($numero % 2 == 0) {
        $resultado['paridade'] = 'Par';
    } else {
        $resultado['paridade'] = 'Ímpar';
    }

    if ($numero < 2) {
        $resultado['primalidade'] = 'Não é primo';
    } else {
        $isPrimo = true;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $isPrimo = false;
                break;
            }
        }
        $resultado['primalidade'] = $isPrimo ? 'Primo' : 'Não é primo';
    }

    $somaDivisores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }
    if ($somaDivisores == $numero) {
        $resultado['perfeicao'] = 'Perfeito';
    } else {
        $resultado['perfeicao'] = 'Não é perfeito';
    }

    return $resultado;
}

$numero = 28;
$resultado = analisarNumero($numero);

echo "Número: $numero" . PHP_EOL;
echo "Paridade: " . $resultado['paridade'] . PHP_EOL;
echo "Primalidade: " . $resultado['primalidade'] . PHP_EOL;
echo "Perfeição: " . $resultado['perfeicao'] . PHP_EOL;

?>