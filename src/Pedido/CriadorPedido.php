<?php

namespace Project\DesignPattern\Pedido;

use Project\DesignPattern\Orcamento;
use Project\DesignPattern\Pedido\TemplatePedido;

class CriadorPedido
{
    private array $templates = [];

    public function criaPedido (
        string $nomeCliente,
        string $dataFormatada,
        Orcamento $orcamento
    ): Pedido
    {
        $template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
        var_dump($template);
        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    private function gerarTemplatePedido (
        string $nomeCliente,
        string $dataFormatada
    )
    {
        $hash = md5($nomeCliente . $dataFormatada);

        if (!array_key_exists($hash, $this->templates)) {
            $this->templates[$hash] = new TemplatePedido(
                $nomeCliente,
                new \DateTimeImmutable($dataFormatada)
            );
        }

        return $this->templates[$hash];
    }
}
