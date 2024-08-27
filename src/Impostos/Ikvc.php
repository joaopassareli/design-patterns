<?php

namespace Project\DesignPattern\Impostos;

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\Impostos\ImpostoCom2Aliquotas;

class Ikcv extends ImpostoCom2Aliquotas
{

    protected function deveCalcularTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->qtdItens > 3;
    }

    protected function calcularTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calcularTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}
