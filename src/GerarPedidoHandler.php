<?php

namespace Project\DesignPattern;

use Project\DesignPattern\Pedido;
use Project\DesignPattern\Orcamento;
use Project\DesignPattern\GerarPedido;

class GerarPedidoHandler
{

    public function __construct(/** GerarPedido, PedidosRepository */){}

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->valor = $gerarPedido->getValorOrcamento();
        $orcamento->qtdItens = $gerarPedido->getNumeroItens();
    
        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;
    
        //Pedidos repository
        echo "Cria pedido no bando de dados ". PHP_EOL;
        //Mail service
        echo "Envia e-mail para o cliente". PHP_EOL;
        //Log service
        echo "Log de criação do pedido". PHP_EOL;
    }


}
