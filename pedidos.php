<?php

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\Pedido\CriadorPedido;

require_once 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorPedido();

for ($i=0; $i < 1000; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criadorPedido->criaPedido(
        'João Passareli',
        date('Y-m-d'),
        $orcamento
    );

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();
