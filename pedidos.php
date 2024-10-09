<?php

use Project\DesignPattern\Pedido;
use Project\DesignPattern\Orcamento;
use Project\DesignPattern\DadosExtrinsecosPedido;

require_once 'vendor/autoload.php';

$pedidos = [];
$dados = new DadosExtrinsecosPedido(
    md5('a'),
    new \DateTimeImmutable()
);

for ($i=0; $i < 1000; $i++) {
    $pedido = new Pedido;
    $pedido->dados = $dados;
    $pedido->orcamento = new Orcamento();

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();
