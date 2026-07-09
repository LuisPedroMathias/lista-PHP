<!-- Exercício 05 – Estatísticas de Texto
Uma editora deseja obter algumas informações sobre os textos enviados pelos autores.
Crie uma função chamada analisarTexto() que receba um texto e retorne:
● Quantidade de palavras;
● Quantidade de caracteres;
● Quantidade de vogais;
● Quantidade de consoantes. -->

<?php  

function analisarTexto($texto){

    $palavras = str_word_count($texto);
    $caracteres = strlen((str_replace(' ','', $texto)));
    $vogais = preg_match_all('/[aeiouAEIOU]/', $texto);
    $consoantes = preg_match_all('/[BCDFGHJKLMNPQRSTVWXYZbcdfghjklmnpqrstvwxyz]/', $texto);

    echo ('O texto é: '. $texto);
    echo ('<br>Quantidade de palavras: '. $palavras);
    echo ('<br>Quantidade de caracteres: '. $caracteres);
    echo ('<br>Quantidade de vogais: '. $vogais);
    echo ('<br>Quantidade de consoantes: '. $consoantes);

}

$texto = 'Eu amo a Eloisa dos Reis <3 ';

analisarTexto($texto);

?>