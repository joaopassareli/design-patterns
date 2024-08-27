<?php

require_once 'vendor/autoload.php';

use Project\DesignPattern\AcoesAoGerarPedido\CriarPedidoBanco;
use Project\DesignPattern\AcoesAoGerarPedido\EnviarEmailPedido;
use Project\DesignPattern\AcoesAoGerarPedido\GerarLogPedido;
use Project\DesignPattern\GerarPedido;
use Project\DesignPattern\GerarPedidoHandler;

$valorOrcamento = $argv[1];
$qtdItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $qtdItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->attach(new CriarPedidoBanco());
$gerarPedidoHandler->attach(new EnviarEmailPedido());
$gerarPedidoHandler->attach(new GerarLogPedido());
$gerarPedidoHandler->execute($gerarPedido);
