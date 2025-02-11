<?php

namespace Project\DesignPattern\Venda;

use Project\DesignPattern\Impostos\Icms;
use Project\DesignPattern\Impostos\Imposto;

class VendaProdutoFactory implements VendaFactory
{
    private int $pesoProduto;

    public function __construct(int $pesoProduto) {
        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): Venda
    {
        return new VendaProduto(new \DateTimeImmutable(), $this->pesoProduto);
    }

    public function imposto(): Imposto
    {
        return new Icms();
    }
}
