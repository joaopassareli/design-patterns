<?php

namespace Project\DesignPattern\Impostos;

use Project\DesignPattern\Orcamento;

class Iss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}