<?php

namespace Project\DesignPattern\EstadosOrcamento;

use Project\DesignPattern\Orcamento;

abstract class EstadoOrcamento 
{
    /**
     * @throws \DomainException
     */
    abstract function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprovaOrcamento(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser aprovado!');
    }

    public function reprovaOrcamento(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser reprovado!');
    }

    public function finalizaOrcamento(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser finalizado!');
    }
}