<!-- Exercício 08 – Organizador de Lista
Uma escola deseja organizar automaticamente a lista de alunos matriculados.
Crie uma função chamada ordenarNomes() que receba uma string contendo nomes separados por vírgulas.
A função deverá transformar os nomes em um vetor, remover espaços desnecessários, ordenar em ordem alfabética e retornar a lista organizada. -->

<?php

function ordenarNomes($nomes) {

    $vetor = explode(",", $nomes);

    $vetor = array_map('trim', $vetor);

    sort($vetor);

    return $vetor;
}

$nomes = 'Luis, Caio, Lucas, Maria, João, Elisa';

$listaOrganizada = ordenarNomes($nomes);

foreach ($listaOrganizada as $nome) {
    echo $nome . PHP_EOL;
}

?>