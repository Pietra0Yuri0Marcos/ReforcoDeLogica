<?php

$quantidade = readline("Quantos números você quer colocar? ");
$soma = 0;

for ($i = 1; $i <= $quantidade; $i++) {
    $numero = readline("Digite o número: ");
    $soma = $soma + $numero;
}

echo "A soma é: " . $soma;

?>