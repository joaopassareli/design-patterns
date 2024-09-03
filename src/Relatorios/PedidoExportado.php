<?php

namespace Project\DesignPattern\Relatorios;

use Project\DesignPattern\Pedido;

class PedidoExportado implements ConteudoExportado
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        return [
            'nome_cliente' => $this->pedido->nomeCliente,
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y')
        ];
    }
}
