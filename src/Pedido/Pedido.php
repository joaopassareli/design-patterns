<?php

namespace Project\DesignPattern\Pedido;

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\Pedido\TemplatePedido;

class Pedido
{
    public TemplatePedido $template;
    public Orcamento $orcamento;
}
