<!-- Exercício 02 – Espelho Mágico
Uma empresa de tecnologia está desenvolvendo um sistema para tratamento de textos.
Crie uma função chamada inverterTexto() que receba uma string e retorne o texto completamente invertido.
Além disso, exiba a quantidade de caracteres existentes na string original. -->

<?php 

function inverterTexto($palavra){

   echo "A palavra invertida é: ", strrev($palavra) ;
   
   echo "<br> Quantidade de letras da palavra: ", strlen($palavra);

}

$palavra = 'Brasil';

inverterTexto($palavra);


?>