<?php

$idade = 15;
$nome = 'goularte';

echo "vc so pode entrar se tiver a partir de 18 anos ou" . PHP_EOL;
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18 && $nome == 'goularte') {
    echo "vc tem $idade anos" . PHP_EOL;
    echo 'pode entrar';
} else {
    echo "vc só tem $idade anos, vc ñ pode entrar";
}

echo PHP_EOL;

echo "Adeus!";