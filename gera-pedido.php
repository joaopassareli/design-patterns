<?php

require_once 'vendor/autoload.php';

use Project\DesignPattern\GerarPedido;
use Project\DesignPattern\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$qtdItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $qtdItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);
