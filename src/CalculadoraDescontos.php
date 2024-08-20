<?php
namespace Project\DesignPattern;

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\Descontos\SemDesconto;
use Project\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Project\DesignPattern\Descontos\DescontoMaisDe500Reais;

class CalculadoraDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
                )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}