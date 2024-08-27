<?php

namespace Project\DesignPattern\AcoesAoGerarPedido;


class EnviarEmailPedido implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Enviado e-mail do pedido gerado ao cliente {$pedido->pedido->nomeCliente}.".PHP_EOL;
    }
}
