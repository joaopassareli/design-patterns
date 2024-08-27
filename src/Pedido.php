<?php

namespace Project\DesignPattern;

use Project\DesignPattern\Orcamento;

class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;
}
