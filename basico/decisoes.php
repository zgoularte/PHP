<?php

$idade = 18;
$nPessoas = 1;

echo "vc so pode entrar se tiver a partir que 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "vc tem $idade anos. pode entrar sozinho";
} else if ($idade >= 16 && $nPessoas > 1) {
    echo "vc tem $idade anos, esta acompanhado(a), entao pode entrar!";
} else {
    echo "vc só tem $idade anos. vc ñ pode entrar";
}

echo PHP_EOL;
echo "adeus!";