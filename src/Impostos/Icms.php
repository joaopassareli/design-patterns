<?php

namespace Project\DesignPattern\Impostos;

use Project\DesignPattern\Orcamento;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}