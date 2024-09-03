<?php

namespace Project\DesignPattern\EstadosOrcamento;

use Project\DesignPattern\Orcamento;

class Finalizado
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Um orçamento finalizado não pode receber descontos.');

    }
}
