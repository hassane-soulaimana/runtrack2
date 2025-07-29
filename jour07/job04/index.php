<?php
function calcul($a, $operation, $b)
{
    // menu contenant les operations
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $b != 0 ? $a / $b : "Erreur Division";
        case '%':
            return $b != 0 ? $a % $b : "Erreur Modulo";
        default:
            return;
    }
}

echo calcul(10, '/', 5);
?>