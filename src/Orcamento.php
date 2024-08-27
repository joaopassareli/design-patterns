<?php

namespace Project\DesignPattern;

use Project\DesignPattern\EstadosOrcamento\EmAprovacao;
use Project\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public float $valor;
    public int $qtdItens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
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

}