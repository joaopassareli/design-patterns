<?php

namespace Project\DesignPattern\Impostos;

use Project\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}