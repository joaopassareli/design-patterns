<?php

namespace Project\DesignPattern\Relatorios;

use Project\DesignPattern\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'qtdItens' => $this->orcamento->qtdItens
        ];
    }
}
