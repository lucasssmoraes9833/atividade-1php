<?php
$nota1 = 5;
$nota2 = 7;
$nota3 = 5.5;

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7) {
    echo "Aprovado";
} elseif ($media >= 5 && $media < 7) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}
?>
