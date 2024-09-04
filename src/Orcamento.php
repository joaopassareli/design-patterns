<?php

namespace Project\DesignPattern;

use Project\DesignPattern\ItemOrcamento;
use Project\DesignPattern\EstadosOrcamento\EmAprovacao;
use Project\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento implements Orcavel
{
    private array $itens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprovaOrcamento()
    {
        $this->valor -= $this->estadoAtual->aprovaOrcamento($this);
    }

    public function reprovaOrcamento()
    {
        $this->valor -= $this->estadoAtual->reprovaOrcamento($this);
    }

    public function finalizaOrcamento()
    {
        $this->valor -= $this->estadoAtual->finalizaOrcamento($this);
    }

    public function addItem(Orcavel $item)
    {
        $this->itens[] = $item;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn (float $valorAcumulado, Orcavel $item) => $item->valor() + $valorAcumulado,
            0
        );
    }

}
