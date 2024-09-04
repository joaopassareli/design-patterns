<?php

namespace Project\DesignPattern\Impostos;

use Project\DesignPattern\Orcamento;

class Iss extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}