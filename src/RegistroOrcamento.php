<?php

namespace Project\DesignPattern;

use HttpAdapter;
use Project\DesignPattern\EstadosOrcamento\Finalizado;

class RegistroOrcamento
{

    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }
    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new \DomainException('Apenas orçamentos finalizados podem ser registrados na API.');
        }
        $this->http->post('http://api.registrar.orcamento', [
            'valor' => $orcamento->valor,
            'qtdItens' => $orcamento->qtdItens
        ]);

    }
}
