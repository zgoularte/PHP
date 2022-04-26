<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Gustavo',
        'saldo' => 1700
    ],
    '123.456.789-11' => [
        'titular' => 'Lara',
        'saldo' => 1800
    ],
    '123.456.789-12' => [
        'titular' => 'João',
        'saldo' => 1400
    ]
];

if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
    echo "Você não pode sacar";
} else {
    $contasCorrentes['123.456.789-10']['saldo'] -= 500;
}

if (1600 > $contasCorrentes['123.456.789-12']['saldo']) {
    echo "Você não pode sacar este valor" . PHP_EOL;
} else
    $contasCorrentes['123.456.789-12']['saldo'] -= 1600;

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}
