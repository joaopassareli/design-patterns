<?php

use Project\DesignPattern\Orcamento;

class ListaOrcamentos implements \IteratorAggregate
{
    /** @var Orcamento[] */
    public array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentos(): array
    {
        return $this->orcamentos;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->orcamentos);
    }
}
