<?php

namespace Project\DesignPattern\AcoesAoGerarPedido;

class CriarPedidoBanco implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Salva o pedido no banco de dados.".PHP_EOL;
    }
}
