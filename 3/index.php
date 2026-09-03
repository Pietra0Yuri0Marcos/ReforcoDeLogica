<?php

$numero1 = readline("Digite o primeiro número: ");
$numero2 = readline("Digite o segundo número: ");

if ($numero1 % $numero2 == 0) {
    echo "O primeiro número é divisível pelo segundo.";
} else {
    echo "O primeiro número não é divisível pelo segundo.";
}

?>