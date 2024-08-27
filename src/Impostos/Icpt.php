<?php

namespace Project\DesignPattern\Impostos;

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\Impostos\ImpostoCom2Aliquotas;

class Icpt extends ImpostoCom2Aliquotas
{
    protected function deveCalcularTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor >500;
    }

    protected function calcularTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function calcularTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}
