<?php

namespace Project\DesignPattern\EstadosOrcamento;

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function finalizaOrcamento(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
