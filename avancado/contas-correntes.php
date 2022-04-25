<?php

$conta1 = [
    'titular' => 'Gustavo',
    'saldo' => 1700
];
$conta2 = [
    'titular' => 'Lara',
    'saldo' => 1800
];
$conta3 = [
    'titular' => 'João',
    'saldo' => 1400
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] .PHP_EOL;
}