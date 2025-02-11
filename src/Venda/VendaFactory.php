<?php

namespace Project\DesignPattern\Venda;

use Project\DesignPattern\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}
