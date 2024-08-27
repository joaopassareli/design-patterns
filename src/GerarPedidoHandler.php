<?php

namespace Project\DesignPattern;

use Project\DesignPattern\Pedido;
use Project\DesignPattern\Orcamento;
use Project\DesignPattern\GerarPedido;
use SplObserver;

class GerarPedidoHandler implements \SplSubject
{
    /** @var SplObserver[]  */
    private array $acoesAposGerarPedido = [];

    public Pedido $pedido;

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->valor = $gerarPedido->getValorOrcamento();
        $orcamento->qtdItens = $gerarPedido->getNumeroItens();
    
        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;
        $this->pedido = $pedido;
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->acoesAposGerarPedido[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        // $this->acoesAposGerarPedido[] = $observer;
    }

    public function notify(): void
    {
        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}
