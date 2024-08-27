<?php

namespace Project\DesignPattern\AcoesAoGerarPedido;

use Project\DesignPattern\Pedido;

interface AcoesAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}
