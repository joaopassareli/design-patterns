<?php

namespace Project\DesignPattern\Impostos;

use Project\DesignPattern\Orcamento;

class Icms extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}