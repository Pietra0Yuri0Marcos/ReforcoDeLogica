<?php

$numero1 = readline("Digite o primeiro número: ");
$numero2 = readline("Digite o segundo número: ");

if ($numero1 > $numero2) {
    echo "O primeiro número é maior.";
} elseif ($numero2 > $numero1) {
    echo "O segundo número é maior.";
} else {
    echo "Os dois números são iguais.";
}

?>