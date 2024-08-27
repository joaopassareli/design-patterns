<?php

namespace Project\DesignPattern\EstadosOrcamento;

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Um orçamento reprovado não pode receber descontos.');
    }

    public function finalizaOrcamento(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
