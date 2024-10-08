<?php

namespace Project\DesignPattern\Impostos;

use Project\DesignPattern\Orcamento;

abstract class Imposto
{
    private ?Imposto $outroImposto;

    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento): float;

    public function calculaImposto(Orcamento $orcamento): float
    {
        return $this->realizaCalculoEspecifico($orcamento) + $this->realizaCalculoOutroImposto($orcamento);
    }

    public function realizaCalculoOutroImposto(Orcamento $orcamento): float
    {
        return  $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto($orcamento);
    }
}
