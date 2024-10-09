<?php

namespace Project\DesignPattern;

use Project\DesignPattern\Impostos\Imposto;
use Project\DesignPattern\Orcamento;

class CalculadoraImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}