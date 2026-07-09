<!-- Exercício 06 – Conversor de Temperatura
Uma empresa que fabrica sensores precisa converter temperaturas entre diferentes escalas.
Crie uma função chamada converterTemperatura() que receba um valor, a escala de origem e a escala de destino.
A função deverá permitir conversões entre Celsius, Fahrenheit e Kelvin. -->

<?php

function converterTemperatura($temperatura, $origem, $destino)
{

    $temp = $temperatura;
    $org = $origem;
    $dest = $destino;


    if ($origem = 'celsius' || 'Celsius' || 'CELSIUS') {
        if ($destino = 'kelvin' || 'KELVIN' || 'Kelvin') {
            $conversao = $temperatura + 273.15;
        } else {
            $conversao = ($temperatura * 9 / 5) + 32;
        }
    }

    if ($origem = 'kelvin' || 'Kelvin' || 'KELVIN') {
        if ($destino = 'celsius' || 'Celsius' || 'CELSIUS') {
            $conversao = $temperatura - 273.15;
        } else {
            $conversao = (($temperatura - 273.15) * 9 / 5) + 32;
        }
    } else {
        if ($destino = 'celsius' || 'Celsius' || 'CELSIUS') {
            $conversao = ($temperatura - 32) * 5 / 9;
        } else {
            $conversao = (($temperatura - 32) * 5 / 9) + 273.15;
        }
    }

    echo ('Essa é a conversão de ' . $temp . ' graus ' . $org . ' para ' . $conversao . ' graus ' . $dest);
}

$temperatura = 20.5;
$origem = 'celsius';
$destino = 'kelvin';

converterTemperatura($temperatura, $origem, $destino);

?>