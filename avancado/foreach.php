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

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
