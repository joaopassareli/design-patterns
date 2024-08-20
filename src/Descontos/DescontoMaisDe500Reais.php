<?php

namespace Project\DesignPattern\Descontos;

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\Descontos\Desconto;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }
        
        $this->proximoDesconto->calculaDesconto($orcamento);
    }
}