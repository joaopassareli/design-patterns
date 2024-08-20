<?php

namespace Project\DesignPattern\Descontos;

use Project\DesignPattern\Descontos\Desconto as DescontosDesconto;
use Project\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends DescontosDesconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->qtdItens > 5) {
            return $orcamento->valor * 0.1;
        }

       return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}