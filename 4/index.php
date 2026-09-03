<?php

$temperatura = readline("Digite a temperatura: ");

if ($temperatura < 15) {
    echo "Está frio.";
} elseif ($temperatura < 30) {
    echo "Está agradável.";
} else {
    echo "Está quente.";
}

?>