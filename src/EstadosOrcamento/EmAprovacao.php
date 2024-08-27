<?php

namespace Project\DesignPattern\EstadosOrcamento;

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\EstadosOrcamento\Aprovado;
use Project\DesignPattern\EstadosOrcamento\Reprovado;
use Project\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class EmAprovacao extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }

    public function aprovarOrcamento(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprovaOrcamento(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Reprovado();
    }
}
