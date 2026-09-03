<?php

$quantidade = readline("Quantos números você quer colocar? ");
$numeros = [];

for ($i = 0; $i < $quantidade; $i++) {
    $numero = readline("Digite o número: ");
    $numeros[] = $numero;
}

$soma = array_sum($numeros);

echo "A soma é: " . $soma;

?> 
