<?php

namespace Project\DesignPattern\AcoesAoGerarPedido;

class GerarLogPedido implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Gerando log após a criação do pedido.".PHP_EOL;
    }
}