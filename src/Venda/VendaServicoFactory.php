<?php

namespace Project\DesignPattern\Venda;

use Project\DesignPattern\Impostos\Iss;
use Project\DesignPattern\Impostos\Imposto;

class VendaServicoFactory implements VendaFactory
{
    private string $nomePrestador;

    public function __construct(string $nomePrestador) {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }

    public function imposto(): Imposto
    {
        return new Iss();
    }
}
