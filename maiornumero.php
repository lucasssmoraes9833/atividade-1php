<?php
function maiorNumero($array) {
    return max($array);
}

$numeros = [3, 9, 2, 15, 7];
echo "O maior número é: " . maiorNumero($numeros);
?>